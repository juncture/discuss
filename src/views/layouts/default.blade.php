<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>{{ $app_title }}</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="{{ $discuss_css }}/bootstrap.min.css" />
	<link rel="stylesheet" href="{{ $discuss_css }}/todc-bootstrap.css" />
	<link rel="stylesheet" href="{{ $discuss_css }}/select2.css" />
	<link rel="stylesheet" href="{{ $discuss_css }}/custom.css" />
</head>

<body>
	<div class="navbar navbar-googlebar navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container-fluid">
				<a class="brand" href="{{ $app_url }}">{{ $app_brand }}</a>

				<form class="navbar-search pull-right">
					<input type="text" class="search-query" placeholder="Search" />
				</form>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="row-fluid">
			@if (isset($left_nav))
			<div class="span3 bs-docs-sidebar">
				<div class="well nav-well sticky">
					<ul class="nav nav-list">
						{{ $left_nav }}
					</ul>
				</div>
			</div>
			<div class="span9">
				{{ $content }}
			</div>
			@else
			<div class="span12">
				{{ $content }}
			</div>
			@endif
		</div>
	</div>

	<script src="{{ $discuss_js }}/jquery.min.js"></script>
	<script src="{{ $discuss_js }}/bootstrap.min.js"></script>
	<script src="{{ $discuss_js }}/select2.min.js"></script>
	<script src="{{ $discuss_js }}/discuss.js"></script>

</body>
</html>
