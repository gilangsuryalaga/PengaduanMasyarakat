<!DOCTYPE html>
<html lang="en">
<head>
	<title>Registration</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-regis100">
			<div class="wrap-regis100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="regis100-form validate-form flex-sb flex-w" method="POST" action="{{ route('register') }}">
				@csrf
					<span class="regis100-form-title p-b-32">
						Registration
					</span>

					<span class="txtregis p-b-11">
						Full Name
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Your Name is required">
						<input class="input100 {{$errors->has('nama') ? 'form control is-invalid' : ''}}" type="text" name="nama" value="{{ old('nama') }}" >
						<span class="focus-input100"></span>
					</div>
					@if($errors->has('nama'))
					<div class="invalid-feedback">
						{{ $errors->first('nama')}}
					</div>
					@endif

                    <span class="txtregis p-b-11">
						Nomor Induk Kependudukan
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "NIK is required">
						<input class="input100 {{$errors->has('nik') ? 'form control is-invalid' : ''}}" type="text" name="nik" value="{{ old('nik') }}" >
						<span class="focus-input100"></span>
					</div>
					@if($errors->has('nik'))
					<div class="invalid-feedback">
						{{ $errors->first('nik')}}
					</div>
					@endif

					<span class="txtregis p-b-11">
						Nomor Telepon
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nomor telepon is required">
						<input class="input100 {{$errors->has('telp') ? 'form control is-invalid' : ''}}" type="telp" name="telp" value="{{ old('telp') }}">
						<span class="focus-input100"></span>
					</div>
					@if($errors->has('telp'))
					<div class="invalid-feedback">
						{{ $errors->first('telp')}}
					</div>
					@endif

					<span class="txtregis p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100 {{$errors->has('username') ? 'form control is-invalid' : ''}}" type="text" name="username"  value="{{ old('username') }}">
						<span class="focus-input100"></span>
					</div>
					@if($errors->has('username'))
					<div class="invalid-feedback">
						{{ $errors->first('username')}}
					</div>
					@endif

					<span class="txtregis p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100 {{$errors->has('password') ? 'form control is-invalid' : ''}}" type="password" name="password" >
						<span class="focus-input100"></span>
					</div>
					@if($errors->has('password'))
					<div class="invalid-feedback">
						{{ $errors->first('password')}}
					</div>
					@endif
					
                    <span class="txtregis p-b-11">
						Confirm your Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Confirm your Password">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100 {{$errors->has('password_confirmation') ? 'form control is-invalid' : ''}}" type="password" name="password_confirmation" >
						<span class="focus-input100"></span>
					</div>
					@if($errors->has('password_confirmation'))
					<div class="invalid-feedback">
						{{ $errors->first('password_confirmation')}}
					</div>
					@endif
                    <div class="flex-sb-m w-full p-b-48">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="i-agree">
							<label class="label-checkbox100" for="ckb1">
								I agree all statements in <a  class="txt3">Term of Service</a>
							</label>
						</div>
					</div>
					<div class="container-regis100-form-btn">
						<button class="regis100-form-btn" type="submit">
							Register
						</button>
                    </div>
                    
                    <div class="w-full text-center p-t-55">
						<span class="txt2">
							Already have an account?
						</span>

						<a href="/" class="txt2 bo1">
							Log in now
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>