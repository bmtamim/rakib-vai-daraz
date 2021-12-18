@extends('frontend.mobile.layout.app')

@section('meta_title','Register')

@section('content')
	<div class="login-wrapper d-flex align-items-center justify-content-center text-center">
		<!-- Background Shape-->
		<div class="background-shape"></div>
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-12 col-sm-9 col-md-7 col-lg-6 col-xl-5"><img class="big-logo"
																								 src="img/core-img/logo-white.png" alt="">
					<!-- Register Form-->
					<div class="register-form mt-5 px-4">
						<form action="{{ route('register') }}" method="POST">
							@csrf
							<div class="form-group text-start mb-4">
								<span>Name</span>
								<label for="name"><i class="lni lni-user"></i></label>
								<input type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
										 value="{{ old('name') }}" placeholder="{{  translate('Full Name') }}" name="name">
								@error('name')
								<span class="invalid-feedback" role="alert">
										 <strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group text-start mb-4"><span>Email</span>
								<label for="email"><i class="lni lni-envelope"></i></label>
								<input class="form-control" id="email" name="email" type="email" placeholder="help@example.com">
								@error('email')
								<span class="invalid-feedback" role="alert">
										 <strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group text-start mb-4"><span>Password</span>
								<label for="password"><i class="lni lni-lock"></i></label>
								<input class="input-psswd form-control" name="password" id="registerPassword" type="password"
										 placeholder="Password">
								@error('password')
								<span class="invalid-feedback" role="alert">
										 <strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<div class="form-group text-start mb-4"><span>Confirm Password</span>
								<label for="password"><i class="lni lni-lock"></i></label>
								<input class="input-psswd form-control" name="password_confirmation" id="registerPassword"
										 type="password"
										 placeholder="Password">
								@error('password_confirmation')
								<span class="invalid-feedback" role="alert">
										 <strong>{{ $message }}</strong>
								</span>
								@enderror
							</div>
							<button class="btn btn-success btn-lg w-100" type="submit">Sign Up</button>
						</form>
					</div>
					<!-- Login Meta-->
					<div class="login-meta-data">
						<p class="mt-3 mb-0">Already have an account?<a class="ms-1" href="{{ route('user.login') }}">Sign
								In</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection
