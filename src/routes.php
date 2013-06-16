<?php namespace Juncture\Discuss;

use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\URL;

Route::group(array('prefix' => Config::get('discuss::route')), function()
{
	Route::get('/', array('as' => 'discuss.index', 'uses' => 'Juncture\Discuss\PostController@index'));
	Route::get('new', array('as' => 'discuss.new_post', 'uses' => 'Juncture\Discuss\PostController@newPost'));
});


View::composer('discuss::layouts.default', function($view)
{
	$title = Config::get('discuss::app_title');
	$brand = Config::get('discuss::app_logo');

	View::share('app_title', $title);
	View::share('app_brand', $brand ?: $title);
	View::share('app_url', URL::to('/'));

	$assets = asset(Config::get('discuss::assets_path'));

	View::share('discuss_css', $assets.'/css');
	View::share('discuss_img', $assets.'/img');
	View::share('discuss_js', $assets.'/js');
});
