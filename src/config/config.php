<?php

return array(

	/*
	|--------------------------------------------------------------------------
	| Name your App!
	|--------------------------------------------------------------------------
	|
	| Off to a simple start.
	| Set the name of your app. This sets things like the
	| <title> tag and branding in the main navbar.
	|
	*/

	'app_title' => 'My Awesome Site',

	/*
	|--------------------------------------------------------------------------
	| App Logo
	|--------------------------------------------------------------------------
	|
	| By default, app_title will be used for branding as mentioned above.
	| If you'd rather use a logo in the navbar, you can set that here. Any HTML
	| will work, and will be wrapped in an <a> tag linking to the site root.
	|
	*/

	'app_logo' => null,

	/*
	|--------------------------------------------------------------------------
	| Discuss URL
	|--------------------------------------------------------------------------
	|
	| This setting determines which URLs Discuss should respond to.
	| Assuming you have installed Laravel in your document root, the default
	| setting "discuss" will enable all URLs under http://yoursite.com/discuss
	|
	*/

	'route' => 'discuss',

	/*
	|--------------------------------------------------------------------------
	| Assets Path
	|--------------------------------------------------------------------------
	|
	| Publicly accessible path (no trailing slash) to where Discuss assets are
	| stored. In most cases you should leave this at the default value, but if
	| you have assets stored on a CDN for example, you can set that here.
	|
	*/

	'assets_path' => 'packages/juncture/discuss/assets',

);
