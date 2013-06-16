<?php namespace Juncture\Discuss;

use Illuminate\Support\Facades\View;

class PostController extends BaseController {

	public function index()
	{
		return View::make('discuss::layouts.default')
				->nest('content', 'discuss::list')
				->nest('left_nav', 'discuss::_navigation');
	}

	public function newPost()
	{
		return View::make('discuss::layouts.default')
				->nest('content', 'discuss::create');
	}
}
