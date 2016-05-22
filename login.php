<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login - Serafina Bolos</title>

    <?php include './assets/css/estilos.php'; ?>


</head>
<body class="signup-page">

    <?php include 'Components/header.php'; ?>

    <div class="wrapper">
        <div class="header header-filter" style="background: linear-gradient(#d78083, #fef0eb);">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                            <form class="form" method="post" action="controller/logon.php">
                                <div class="header header-primary text-center">
                                    <h4>Login</h4>
                                </div>
                                <div class="content">

                                    <div class="input-group">
                                        <span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                                        <input type="text" class="form-control" name="login" placeholder="Email...">
                                    </div>

                                    <div class="input-group">
                                        <span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                        <input type="password" placeholder="Senha..." name="senha" class="form-control" />
                                    </div>

                                </div>
                                <div class=" text-center">
                                    <button type="submit" class="btn btn-primary btn-wd btn-lg">Login</button>
                                    <a href="cadastro.php" class="btn btn-primary btn-wd btn-lg">Cadastrar</a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <?php include 'Components/footer.php';?>
        </div>

    </div>


</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="assets/js/material-kit.js" type="text/javascript"></script>

	<script type="text/javascript">
		$().ready(function(){
			// the body of this function is in assets/material-kit.js
			$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);
		});
	</script>




</html>
