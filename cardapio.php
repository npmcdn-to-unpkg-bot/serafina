<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Cardapio - Serafina Bolos</title>
    <?php include './assets/css/estilos.php'; ?>
</head>

<body class="profile-page">
	
    <?php include 'Components/header.php'; ?>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('assets/img/wp.png');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="row">
	                    <div class="profile">
	                        <div class="avatar">
	                            <img src="assets/img/logo-square.png" alt="Circle Image" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title">Nossos bolos</h3>
	                        </div>
	                    </div>
	                </div>
	                <div class="description text-center">
                        <p>An artist of considerable range, Chet Faker — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. </p>
	                </div>

					<div class="row">
						<div class="col-md-6 col-md-offset-3">
							<div class="profile-tabs">
			                    <div class="nav-align-center">
									<ul class="nav nav-pills" role="tablist">
										<li class="active">
											<a href="#bolos" role="tab" data-toggle="tab">
												<i class="material-icons">cake</i>
												Bolos
											</a>
										</li>
										<li>
				                            <a href="#favoritos" role="tab" data-toggle="tab">
												<i class="material-icons">favorite</i>
												Favoritos
				                            </a>
				                        </li>
				                    </ul>

				                    <div class="tab-content gallery">
										<div class="tab-pane active" id="bolos">
				                            <div class="row">
												<div class="col-md-6">
													<img src="assets/img/preto-branco.png" class="img-rounded" />
													<img src="assets/img/morango-ok.png" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="assets/img/bolo-morango.png" class="img-rounded" />
													<img src="assets/img/pascoa.jpg" class="img-rounded" />
												</div>
				                            </div>
				                        </div>
				                        <div class="tab-pane text-center" id="favoritos">
											<div class="row">
												<div class="col-md-6">
													<img src="assets/img/bolo-pote.png" class="img-rounded" />
													<img src="assets/img/bolo-pote2.png" class="img-rounded" />
												</div>
												<div class="col-md-6">
													<img src="assets/img/all.jpg" class="img-rounded" />
													<img src="assets/img/ninho.jpg" class="img-rounded" />
												</div>
											</div>
				                        </div>

				                    </div>
								</div>
							</div>
							<!-- End Profile Tabs -->
						</div>
	                </div>

	            </div>
	        </div>
		</div>

    </div>
    
    <?php include 'footer.php';?>

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
