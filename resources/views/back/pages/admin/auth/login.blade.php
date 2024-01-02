@extends('back.layout.login-admin-layout')
@section('pageTitle', isset($pageTitle)? $pageTitle: 'Admin Login')
@section('content')
    <div class="login-box bg-white box-shadow border-radius-10">
			<div class="login-title">
				<h2 class="text-center text-primary">Connexion Admin</h2>
			</div>
			<form action="#" method="POST">
			@method('post')
				@csrf
				{{-- @if(Session::get('fail'))
					<div class="alert alert-danger">
						{{Session::get('fail')}}

						<button type="button" class="close" data-dismiss="alert" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
				@endif --}}
				<!-- <div class="select-role">
					<div class="btn-group btn-group-toggle" data-toggle="buttons">
						<label class="btn active">
							<input type="radio" name="options" id="admin" />
							<div class="icon">
								<img
									src="/back/vendors/images/briefcase.svg"
									class="svg"
									alt=""
								/>
							</div>
							<span>I'm</span>
							Manager
						</label>
						<label class="btn">
							<input type="radio" name="options" id="user" />
							<div class="icon">
								<img
									src="/back/vendors/images/person.svg"
									class="svg"
									alt=""
								/>
							</div>
							<span>I'm</span>
							Employee
						</label>
					</div>
				</div> -->
				<div class="input-group custom">
					<input
						type="text"
						class="form-control form-control-lg"
						placeholder="Email/Nom d'utilisateur"
						name="email" value="{{ old('email')}}"
						required
					/>
					<div class="input-group-append custom">
						<span class="input-group-text"
							><i class="icon-copy dw dw-user1"></i
						></span>
					</div>
				</div>
				@error('email')
					<div class="d-block text-danger" style="margin-top: -25px;margin-bottom:15px">
						{{'email est requis'}}
					</div>
				@enderror
				<div class="input-group custom">
					<input
						type="password"
						class="form-control form-control-lg"
						placeholder="**********"
						name="password"
						value="{{ old('password')}}"
					/>
					<div class="input-group-append custom">
						<span class="input-group-text"
							><i class="dw dw-padlock1"></i
						></span>
					</div>
				</div>
				@error('password')
					<div class="d-block text-danger" style="margin-top: -25px;margin-bottom:15px">
						{{$message}}
					</div>
				@enderror
				<div class="row pb-30">
					<div class="col-6">
						<div class="custom-control custom-checkbox">
							<input
								type="checkbox"
								class="custom-control-input"
								id="customCheck1"
								required
							/>
							<label class="custom-control-label" for="customCheck1"
								>Souvenez-vous</label
							>
						</div>
					</div>
					<div class="col-6">
						<div class="forgot-password">
							<a href="forgot-password.html">Mot de passe oublié</a>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-sm-12">
						<div class="input-group mb-0">
							<!--
							use code for form submit
							-->
							
							<input class="btn btn-primary btn-lg btn-block" type="submit" value="Connexion">
						
							
						</div>
						<!-- <div
							class="font-16 weight-600 pt-10 pb-10 text-center"
							data-color="#707373"
						>
							OR
						</div>
						<div class="input-group mb-0">
							<a
								class="btn btn-outline-primary btn-lg btn-block"
								{{--href="{{asset('register')}}"--}}
								>Register To Create Account</a
							>
						</div> -->
					</div>
				</div>
			</form>
		</div>
@endsection

