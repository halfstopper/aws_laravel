@extends ('layouts.master')

@section('content')

<div class="col-md-8 blog-main">
	<h1>Publish a post</h1>
	<hr>

	<form method ="POST" action="/posts">
		{{csrf_field()}}
	  <div class="form-group">
	    <label for="title">Title:</label>
	    <input type="text" id="title" class="form-control" name='title'>
	
	  	<label for="body">Body:</label>
	    <textarea id="body" name="body" class="form-control"></textarea>
	  </div>

	  <button type="submit" class="btn btn-primary">Publish</button>
	</form>


</div>

@endsection 