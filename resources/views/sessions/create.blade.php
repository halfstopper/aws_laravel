<!-- @extends ('layouts.master')
@section('content')
	<div class="col-md-8 blog-main">
		<h1>Sign In</h1>
        <form method="POST" action="/login">
            {{csrf_field()}}

            <div class="form-group">
                <label for="email" >Email: </label>          
                <input id="email" type="email" class="form-control" name="email" required>                    
            </div>

            <div class="form-group">
                <label for="password" >Password: </label>          
                <input id="password" type="password" class="form-control" name="password" required>                    
            </div>

            <div class="form-group">
                <button type ="submit" class="btn btn-primary">Sign In</button>
            </div>  



            @include('layouts.errors')



        </form>
	</div>

@endsection
 -->


@extends('layouts.master')

@section('content')
    <div class="col-md-8 blog-main">
        <h1>Sign in</h1>

        <form method="POST" action="/login">
            {{ csrf_field() }}

            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Sign in</button>
            </div>

            @include('layouts.errors')

        </form>
    </div>
@endsection