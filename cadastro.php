<!doctype html>
<html lang="en" ng-app="adicionarUser">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Login - Serafina Bolos</title>

    <?php include './assets/css/estilos.php'; ?>
    <script src="assets/angular-1.5.5/angular.js"></script>
    <script src="assets/angular-1.5.5/angular-messages.js"></script>
    <script src="Controller/verificacao.js"></script>
    

</head>

<body class="signup-page" ng-controller="adicionarUserController">
	<?php include 'Components/header.php'; ?>

   
   <div class="wrapper">
    <div class="header header-filter" style="background: linear-gradient(#d78083, #fef0eb);">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                    <div class="card card-signup">
                        <form name="adicionarForm" enctype="multipart/form-data" method="post" action="Controller/controllerUser.php"  class="contact-form" role="form">
                            <div class="header header-primary text-center">
                                <h4>Cadastro</h4>{{app}}
                            </div>
                            <p class="text-divider">Cadastre-se</p>
                            <div class="content">

                                <div class="input-group">
                                    <span class="input-group-addon">
											<i class="material-icons">face</i>
								    </span>
                                    <input type="text" class="form-control" ng-model="nome" name="nome" placeholder="Nome" ng-minlength="5" ng-required="true" >
                                </div>
                                <div ng-show="adicionarForm.nome.$error.required && !adicionarForm.nome.$pristine" class="alert alert-danger">
                                    Campo nome obrigatório!
                                </div>
                                <div ng-show="adicionarForm.nome.$error.minlength && !adicionarForm.nome.$pristine" class="alert alert-danger">
                                   Nome deve ter no minimo 5 caracteres!
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
											<i class="material-icons">account_box</i>
									</span>
                                    <input type="tel" placeholder="CPF" ng-model="cpf" name="cpf" ng-maxlength="14" class="form-control" ng-required="true" >
                                </div>
                                <div ng-show="adicionarForm.cpf.$error.required && !adicionarForm.cpf.$pristine" class="alert alert-danger">
                                    Campo CPF obrigatório!
                                </div>
                                <div ng-show="adicionarForm.cpf.$error.maxlength && !adicionarForm.cpf.$pristine" class="alert alert-danger">
                                   Campo deve ter no máximo 14 caracteres!
                                </div>
                                
                                <div class="input-group">
                                    <span class="input-group-addon">
											<i class="material-icons">account_box</i>
									</span>
                                    <input type="tel" placeholder="RG" ng-model="rg" name="rg" ng-maxlength="14" class="form-control" ng-required="true" />
                                </div>
                                <div ng-show="adicionarForm.rg.$error.required && !adicionarForm.rg.$pristine" class="alert alert-danger">
                                    Campo RG obrigatório!
                                </div>
                                <div ng-show="adicionarForm.rg.$error.maxlength && !adicionarForm.rg.$pristine" class="alert alert-danger">
                                   Campo deve ter no máximo 14 caracteres!
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
											<i class="material-icons">call</i>
									</span>
                                    <input type="tel" class="form-control" ng-model="telefone" name="telefone" placeholder="Telefone" ng-maxlength="12" ng-required="true">
                                </div>
                                <div ng-show="adicionarForm.telefone.$error.required && !adicionarForm.telefone.$pristine" class="alert alert-danger">
                                    Campo telefone obrigatório!
                                </div>
                                <div ng-show="adicionarForm.telefone.$error.maxlength && !adicionarForm.telefone.$pristine" class="alert alert-danger">
                                   Campo deve ter no máximo 12 caracteres!
                                </div>
                                
                                <div class="input-group">
                                    <span class="input-group-addon">
											<i class="material-icons">call</i>
									</span>
                                    <input type="tel" class="form-control" name="celular" placeholder="Celular">
                                </div>

                                <div class="input-group">
                                    <span class="input-group-addon">
										<i class="material-icons">email</i>
									</span>
                                    <input type="email" class="form-control" ng-model="email" name="email" placeholder="Email" ng-required="true">
                                </div>
                                <div ng-show="adicionarForm.email.$error.required && !adicionarForm.email.$pristine" class="alert alert-danger">
                                    Campo email obrigatório!
                                </div>
                               
                                <div class="input-group">
                                    <span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
                                    <input type="password" placeholder="Senha" ng-model="senha" name="senha" class="form-control" ng-required="true" />
                                </div>
                                <div ng-show="adicionarForm.senha.$error.required && !adicionarForm.senha.$pristine" class="alert alert-danger">
                                    Campo senha obrigatório!
                                </div>
                                <div class="input-group">
                                    <span class="input-group-addon">
										<i class="material-icons">lock_outline</i>
									</span>
                                    <input type="password" placeholder="Confirmar senha" name="conf_senha" class="form-control" />
                                </div>
                                
                            </div>
                            <div class="footer text-center">
                                <button type="submit" name="btEnviar" value="Cadastrar" class="btn btn-primary btn-raised" ng-disabled="adicionarForm.$invalid">
                                    Cadastrar
                                </button>
                            </div>
                        </form>
							

							
						</div>
					</div>
				</div>
			</div>

<?php include 'Components/footer.php'; ?>

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
