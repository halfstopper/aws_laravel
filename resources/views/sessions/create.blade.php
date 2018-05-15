@extends ('layouts.master')
@section('content')
	<div class="col-md-8 blog-main">
		<h1>Register</h1>
		<form method ="POST" action="/register">
			{{csrf_field()}}

			    <div class="form-group">
                    <label for="name" >Name: </label>          
                    <input id="name" type="text" class="form-control" name="name">                    
                </div>
                <div class="form-group">
                    <label for="email" >Email: </label>          
                    <input id="email" type="email" class="form-control" name="email">                    
                </div>

                <div class="form-group">
                    <label for="password" >Password: </label>          
                    <input id="password" type="password" class="form-control" name="password">                    
                </div>
                <div class="form-group">
                	<button type ="submit" class="btn btn-primary">Register</button>
                </div>
		</form>
	</div>

@endsection