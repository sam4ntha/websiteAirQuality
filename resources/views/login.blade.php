<!DOCTYPE html>
<html lang="en">
<head>
	<title>Air Quality</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href={{ URL::asset("logoOf.png") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::asset("css/bootstrap/css/bootstrap.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::asset("fonts/font-awesome-4.7.0/css/font-awesome.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::asset("fonts/iconic/css/material-design-iconic-font.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::asset("animate/animate.css") }}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{ URL::asset("css-hamburgers/hamburgers.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::asset("animsition/css/animsition.min.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::asset("select2/select2.min.css") }}>
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href={{ URL::asset("daterangepicker/daterangepicker.css") }}>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href={{ URL::asset("css/css/util.css") }}>
	<link rel="stylesheet" type="text/css" href={{ URL::asset("css/css/main.css") }}>
<!--===============================================================================================-->
</head>
<body>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-title p-b-26">
						Bienvenido
					</span>
					<span class="login100-form-title p-b-48">
                        <img class="rounded-circle" src={{ URL::asset("logoOf.png") }} alt="Air Quality" width="150" height="150">
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Coreo válido es: a@b.c">
						<input class="input100" type="text" name="email">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Introduce la contraseña">
						<span class="btn-show-pass">
							<i class="zmdi zmdi-eye"></i>
						</span>
						<input class="input100" type="password" name="pass">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Iniciar Sesión
							</button>
						</div>
					</div>

					<div class="text-center p-t-115">
						<span class="txt1">
							¿Aún no te has registrado?
						</span>

						<a class="txt2" href="#">
							Regístrate
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src={{ URL::asset("js/jquery-3.2.1.min.js") }}></script>
<!--===============================================================================================-->
	<script src={{ URL::asset("animsition/js/animsition.min.js") }}></script>
<!--===============================================================================================-->
	<script src={{ URL::asset("js/bootstrap/js/popper.js") }}></script>
	<script src={{ URL::asset("js/bootstrap/js/bootstrap.min.js") }}></script>
<!--===============================================================================================-->
	<script src={{ URL::asset("select2/select2.min.js") }}></script>
<!--===============================================================================================-->
	<script src={{ URL::asset("daterangepicker/moment.min.js") }}></script>
	<script src={{ URL::asset("daterangepicker/daterangepicker.js") }}></script>
<!--===============================================================================================-->
	<script src={{ URL::asset("countdowntime/countdowntime.js") }}></script>
<!--===============================================================================================-->
	<script src={{ URL::asset("js/js/main.js") }}></script>

</body>
</html>