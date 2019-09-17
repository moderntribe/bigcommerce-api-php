# BigCommerce API PHP Client Library

## Create a widget 

```php
use BigCommerce\Api\Model\PlacementRequest;
use BigCommerce\Api\Model\WidgetRequest;
use BigCommerce\Api\Model\WidgetTemplateRequest;

$api     = new \BigCommerce\Api\ApiFactory( $api_url, $client_id, $access_token, $client_secret );
$widgets = $api->widgets();

try {
	/*
	 * Creat the Widget Template
	 */
	$template_string = '<ul>
{{#each list_items}}
 <li style="color:{{color}};">{{text}}</li>
{{/each}}
</ul>';
	
	$template = $widgets->createWidgetTemplate( new WidgetTemplateRequest( [
		'name'     => 'Simple List',
		'template' => $template_string,
	] ) )->getData();
	
	$template_uuid = $template->getUuid();
	
	/*
	 * Create a Widget to use the Widget Template
	 */
	$widget = $widgets->createWidget( new WidgetRequest( [
		'name' => 'Color List',
		'widget_template_uuid' => $template_uuid,
		'widget_configuration' => (object) [
			'list_items' => [
				(object) [
					'color' => 'blue',
					'text' => 'The color is blue',
				],
				(object) [
					'color' => 'green',
					'text' => 'The color is green',
				],
				(object) [
					'color' => 'red',
					'text' => 'The color is red',
				],
			]
		]
	] ) )->getData();
	
	$widget_uuid = $widget->getUuid();
	
	/*
	 * Place the widget on a page
	 */
	
	/*
	 * Use an arbitrary region defined in our theme
	 * For all regions for a given theme template:
	 * $regions = $widgets->getContentRegions( [ 'templateFile' => 'pages/home' ] )->getData();
	 */
	$region_name = 'home_below_menu';
	
	$placement = $widgets->createPlacement( new PlacementRequest( [
		'widget_uuid'   => $widget_uuid,
		'sort_order'    => 1,
		'region'        => $region_name,
		'template_file' => 'pages/home',
		'status'        => 'active',
	] ) )->getData();

} catch ( \BigCommerce\Api\ApiException $e ) {
	$error_message = $e->getMessage();
	$error_body    = $e->getResponseBody();
	$error_headers = $e->getResponseHeaders();
	// do something with the error
	return;
}
```
