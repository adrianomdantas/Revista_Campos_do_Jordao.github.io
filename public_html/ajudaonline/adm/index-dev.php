<?
include "Setup/Funcoes/constantes.php";

if (isset($_SESSION["genius"]))
 {
 	echo "<script language='javascript' type='text/javascript'>
 	      window.location.href='".$homeSistema."'</script>";
 }
else
{
	echo "2";
}

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Lucky Adm</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    
    <!--=====================================================================================-->
	<link rel="apple-touch-icon" sizes="57x57" href="../0/ico/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="../0/ico/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="../0/ico/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="../0/ico/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="../0/ico/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="../0/ico/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="../0/ico/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="../0/ico/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="../0/ico/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="../0/ico/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../0/ico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="../0/ico/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../0/ico/favicon-16x16.png">
    <link rel="manifest" href="../0/ico/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="../0/ico/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!--=====================================================================================-->





<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="../0/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../0/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../0/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../0/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../0/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../0/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../0/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../0/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="../0/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="../0/css/util.css">
	<link rel="stylesheet" type="text/css" href="../0/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-30 p-b-50">				
				<div style="text-align: center; padding-bottom: 15px;">
					<img src="Setup/sysLogin/images/CloudHotelLogo.png" width="300" alt=""/>
					<?
					 session_start();
					 if (isset($_SESSION['loginerror']))
					 {
					 	echo $_SESSION['loginerror'];
					 	session_destroy();
					 }
					?>
				</div>

				<form class="login100-form validate-form p-b-33 p-t-5" method="post" action="Setup/Funcoes/loginExecutar.php">

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="mailuid" placeholder="Usuário">
						<span class="focus-input100" data-placeholder="&#xe82a;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="psw" placeholder="Senha">
						<span class="focus-input100" data-placeholder="&#xe80f;"></span>
					</div>

					<div class="container-login100-form-btn m-t-32">
						<button class="login100-form-btn" type="submit" name="login-submit">
							Login
						</button>
					</div>

				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="../0/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="../0/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="../0/vendor/bootstrap/js/popper.js"></script>
	<script src="../0/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="../0/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="../0/vendor/daterangepicker/moment.min.js"></script>
	<script src="../0/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="../0/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="../0/js/main.js"></script>

</body>
</html>