@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-primary">
				<div class="panel-heading clearfix">
					Edit Post
					<a href="{{route('postListing')}}" class="btn btn-default pull-right" title="Create New Post">Post Listing</a>
				</div>

				<div class="panel-body">
					@if (count($errors) > 0)
						<div class="alert alert-danger">
							<strong>Whoops!</strong> There were some problems with your input.<br><br>
							<ul>
								@foreach ($errors->all() as $error)
									<li>{{ $error }}</li>
								@endforeach
							</ul>
						</div>
					@endif
					@if (Session::has('success'))
						<div class="alert alert-success">
							<strong>Successfully!</strong> {{Session::get('success')}}.
						</div>
					@endif
					<form class="form-horizontal" role="form" method="POST" action="{{route('postUpdate')}}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<input type="hidden" name="post_id" value="{{ $posts->id or '' }}">
						<div class="form-group">
							<label class="col-md-4 control-label">Post Article</label>
							<div class="col-md-6">
								<input type="text" class="form-control" name="post_article" value="{{ $posts->article_name or old('post_article') }}">
							</div>
						</div>

						<div class="form-group">
							<label class="col-md-4 control-label">Post Description</label>
							<div class="col-md-6">
								<textarea class="form-control" name="post_description" rows="6">{{ $posts->article_discription or old('post_description') }}</textarea>
							</div>
						</div>

						<div class="form-group">
							<div class="col-md-6 col-md-offset-4">
								<button type="submit" class="btn btn-primary">Submit Post</button>
								<a class="btn btn-primary" href="{{route('postListing')}}">Back</a>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
