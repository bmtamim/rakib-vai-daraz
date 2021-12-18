@extends('frontend.mobile.layout.app')

@section('title','Login')

@section('content')
	<div class="login-wrapper d-flex align-items-center justify-content-center text-center">
		<!-- Background Shape-->
		<div class="background-shape"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5"><img class="big-logo"
																								 src="{{ asset('public/frontend/mobile/img/core-img/logo-white.png') }}"
																								 alt="">
					<!-- Register Form-->
					<div class="register-form mt-5 px-4">
						<form action="{{ route('login') }}" method="POST">
							@csrf
							<div class="form-group text-start mb-4"><span>Username</span>
								<label for="username"><i class="lni lni-user"></i></label>
								<input class="form-control" id="username" type="text" placeholder="info@example.com"
										 name="email">

								@error('email')
								<span class="invalid-feedback" role="alert">
									  <strong>{{ $message }}</strong>
								 	</span>
								@enderror
							</div>
							<div class="form-group text-start mb-4"><span>Password</span>
								<label for="password"><i class="lni lni-lock"></i></label>
								<input class="form-control" id="password" type="password" placeholder="Password"
										 name="password">
								@error('password')
								<span class="invalid-feedback" role="alert">
									  <strong>{{ $message }}</strong>
								 	</span>
								@enderror
							</div>
							<button class="btn btn-success btn-lg w-100" type="submit">Log In</button>
						</form>
					</div>
					<!-- Login Meta-->
					<div class="login-meta-data"><a class="forgot-password d-block mt-3 mb-1" href="forget-password.html">Forgot
							Password?</a>
						<p class="mb-0">Didn't have an account?<a class="ms-1" href="{{ route('user.registration') }}">Register
								Now</a></p>
					</div>
					<!-- View As Guest-->
					<div class="view-as-guest mt-3"><a class="btn" href="{{ env('APP_URL') }}">View as Guest</a></div>
				</div>
			</div>
		</div>
	</div>
@endsection
