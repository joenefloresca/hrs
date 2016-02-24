@extends('app_ext')
@section('content')
<div class="middle-box text-center loginscreen   animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name">IN+</h1>

            </div>
            <h3>Register to QDF HRS</h3>
            <p>Create account to see it in action.</p>
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
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/auth/register') }}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Name" name="name" required="">
                </div>

                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email" required="">
                </div>

                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ID Number" name="id_number" required="">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password" required="">
                </div>

                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Confirm Password" name="password_confirmation">
                </div>

                <button type="submit" class="btn btn-primary block full-width m-b">Register</button>

                <p class="text-muted text-center"><small>Already have an account?</small></p>
                <a class="btn btn-sm btn-white btn-block" href="login.html">Login</a>
            </form>
            <p class="m-t"> <small>Inspinia we app framework base on Bootstrap 3 &copy; 2014</small> </p>
        </div>
    </div>
@endsection
