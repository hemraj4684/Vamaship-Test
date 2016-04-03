@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading clearfix">
					All Post
					<a href="{{route('postCreate')}}" class="btn btn-default pull-right" title="Create New Post">Create New Post</a>
				</div>
				@if (Session::has('success'))
						<div class="alert alert-success">
							<strong>Successfully!</strong> {{Session::get('success')}}.
						</div>
					@endif
				<div class="panel-body">
					@if(isset($posts))
					@foreach($posts as $post)
					<div class="panel panel-default">
					  <div class="panel-heading clearfix">
					  	{{$post->article_name}}
					  	<div class="pull-right">
						  	<a href="{{route('postEdit',['id' => $post->id])}}" title="Edit"><i class="fa fa-edit"></i></a>&nbsp;&nbsp;|&nbsp;&nbsp;
						  	<a href="{{route('postDelete',['id' => $post->id])}}" title="Delete"><i class="fa fa-remove"></i></a>
					  	</div>
				  	  </div>
					  <div class="panel-body">
					    {{$post->article_discription}}
					  </div>
					</div>
					@endforeach
					@endif
				</div>

			</div>
		</div>
	</div>
</div>
@endsection
