<div class="row-fluid">
	<ul class="breadcrumb">
		<li>{{ link_to($app_url, 'Home') }} <span class="divider">/</span></li>
		<li class="active">Discuss</li>
	</ul>
</div>

<div class="row-fluid">
	<div class="pull-right">
		<a class="btn btn-primary" href="{{ URL::route('discuss.new_post') }}">New Post</a>
	</div>
</div>

<div class="row-fluid">
	<table class="table table-hover">
		<thead>
			<tr>
				<th>Title</th>
				<th>Tags</th>
				<th>Posted</th>
				<th>Updated</th>
			</tr>
		</thead>
		<tbody>
			<tr class="warning">
				<td>How to setup your launcher</td>
				<td>
					<span class="label label-info">Client</span>
				</td>
				<td>29/05/2013 14:56</td>
				<td>29/05/2013 14:56</td>
			</tr>
			<tr>
				<td>
					<strong>Some other post title</strong>
				</td>
				<td>
					<span class="label">Off-topic</span>
				</td>
				<td>31/05/2013 09:37</td>
				<td>09/06/2013 15:31</td>
			</tr>
			<tr>
				<td>
					<strong>Some post title</strong>
				</td>
				<td>
					<span class="label label-important">Server</span>
				</td>
				<td>28/05/2013 12:34</td>
				<td>01/06/2013 23:45</td>
			</tr>
			<tr>
				<td>
					Some post title
				</td>
				<td>
					<span class="label label-info">Client</span>
				</td>
				<td>28/05/2013 12:34</td>
				<td>29/06/2013 23:45</td>
			</tr>
		</tbody>
	</table>
</div>
