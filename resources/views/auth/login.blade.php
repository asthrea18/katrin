@extends('layouts.template')

@section('content')
    	<!-- Shop Login -->
		<section class="shop login section">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 offset-lg-3 col-12">
						<div class="login-form">
							<h2>Login</h2>
							<p>Please register in order to checkout more quickly</p>
							<!-- Form -->
                            <form class="form" method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="row">
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Username<span>*</span></label>
                                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label>Your Password<span>*</span></label>
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group login-btn">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Login') }}
                                            </button>
                                            @if (Route::has('password.request'))
                                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                                    {{ __('Forgot Your Password?') }}
                                                </a>
                                            @endif

                                            <a href="register.html" class="btn">Register</a>
                                        </div>
                                        <div class="checkbox">
                                            <label class="checkbox-inline" for="2">
                                            <input name="remember"  id="2" type="checkbox">Remember me</label>

                                        </div>

                                    </div>
                                </div>
                            </form>
                            <!--/ End Form -->
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--/ End Login -->

@endsection
