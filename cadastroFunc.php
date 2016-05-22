<!DOCTYPE html>
<html lang="en" ng-app="adicionarFuncionario">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Serafina Bolos</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <?php include './assets/css/estilos.php'; ?>
    <script src="assets/angular-1.5.5/angular.js"></script>
    <script src="assets/angular-1.5.5/angular-messages.js"></script>
    <script src="Controller/verificacao.js"></script>
</head>

<body ng-controller="adicionarFuncionarioController">

    <?php include 'Components/header-admin.php'; ?>

    <div class="row">
       <h2 class="text-center"><i class="material-icons">face</i> {{app}}</h2>
        <div class="col-md-4 col-md-offset-4">
            <form name="funcForm" enctype="multipart/form-data" method="post" action="Controller/controllerFuncionario.php" class="contact-form" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Nome *</label>
                            <input type="text" class="form-control" id="" name="nome" ng-model="nome" ng-required="true">
                        </div>
                        <div ng-show="funcForm.nome.$error.required && !funcForm.nome.$pristine" class="alert alert-danger">
                            Por favor, digite o sabor do bolo!
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">RG *</label>
                            <input type="text" class="form-control" id="" name="rg" ng-model="rg" ng-required="true" ng-maxlength="13">
                        </div>
                         <div ng-show="funcForm.rg.$error.required && !funcForm.rg.$pristine" class="alert alert-danger">
                            Por favor, digite o RG!
                        </div>
                        <div ng-show="funcForm.rg.$error.maxlength" class="alert alert-danger">
                            Máximo de 12 caracteres.
                        </div>
                    </div>
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">CPF *</label>
                    <input type="number" class="form-control" id="" name="cpf" ng-model="cpf" ng-required="true" ng-maxlength="14">
                    <div ng-show="funcForm.cpf.$error.required && !funcForm.cpf.$pristine" class="alert alert-danger">
                        Por favor, digite o CPF!
                    </div>
                    <div ng-show="funcForm.cpf.$error.maxlength" class="alert alert-danger">
                        Máximo de 12 caracteres.
                    </div>
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Telefone *</label>
                    <input type="tel" class="form-control" id="" name="telefone"  ng-model="telefone" ng-required="true" ng-maxlength="13">
                </div>
                <div ng-show="funcForm.telefone.$error.required && !funcForm.telefone.$pristine" class="alert alert-danger">
                    Por favor, digite o telefone!
                </div>
                <div ng-show="funcForm.telefone.$error.maxlength" class="alert alert-danger">
                    Máximo de 13 caracteres!
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Celular </label>
                    <input type="text" class="form-control" id=""  name="celular" maxlength="13">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Email utilizado para login *</label>
                    <input type="email" class="form-control" id="" name="email" ng-model="email" ng-required="true">
                </div>
                <div ng-show="funcForm.email.$error.required && !funcForm.email.$pristine" class="alert alert-danger">
                    Por favor, digite o email!
                </div>
                
                <div class="form-group label-floating">
                    <label class="control-label">Senha *</label>
                    <input type="password" class="form-control" maxlength="18" id="" name="senha" ng-model="password" ng-required="true">
                </div>
                <div ng-show="funcForm.senha.$error.required && !funcForm.senha.$pristine" class="alert alert-danger">
                    Digite uma senha!
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Confirme a senha *</label>
                    <input type="password" class="form-control" maxlength="18" id="" name="conf_senha" ng-required="true">
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <button type="submit" name="btEnviar" value="Cadastrar" ng-disabled="funcForm.$invalid" class="btn btn-primary btn-raised">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </form>
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

</html>