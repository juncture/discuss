<div class="row-fluid">
	<ul class="breadcrumb">
		<li>{{ link_to($app_url, 'Home') }} <span class="divider">/</span></li>
		<li>{{ link_to_route('discuss.index', 'Discuss') }} <span class="divider">/</span></li>
		<li class="active">New Post</li>
	</ul>
</div>

<div class="row-fluid">
	<form class="form-horizontal">
		<div class="control-group">
			<label class="control-label" for="postAuthor">Post as</label>
			<div class="controls">
				<input class="input-xlarge" type="text" id="postAuthor" placeholder="Joe Bloggs"/>
				<span class="help-inline">Your name will be shown with the post</span>
				{{--<!-- TODO: Add "not me" link if external auth is configured -->--}}
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="postTitle">Title</label>
			<div class="controls">
				<input class="input-xxlarge" type="text" id="postTitle" placeholder="My awesome relevant post title"/>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="postTitle">Tags</label>
			<div class="controls">
				<select class="input-xlarge" id="postTags" multiple="multiple">
					<option value="client">Client</option>
					<option value="server">Server</option>
					<option value="offtopic">Off-topic</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label" for="postText">Message</label>
			<div class="controls">
				<textarea class="input-xxlarge" rows="5" id="postAuthor" placeholder="Lorem ipsum dolor sit amet..."></textarea>
				{{--<!-- TODO: add bootstrap-wysihtml5 -->--}}
			</div>
		</div>
		<div class="control-group">
			<div class="controls">
				<label class="checkbox">
					<input type="checkbox" id="postMemory"/> Remember me
				</label>
				<button type="submit" class="btn btn-primary">Discuss!</button>
				<button type="reset" class="btn">Reset</button>
			</div>
		</div>
	</form>
</div>
