<!DOCTYPE html>
<html lang="en" ng-app="adicionarBolo">
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

<body ng-controller="adicionarBoloController">
   
<?php include 'Components/header-admin.php'; ?>
   
<div class="row">
   <h2 class="text-center">
   <i class="material-icons">cake</i>{{app}}</h2>
    <div class="col-md-4 col-md-offset-4">
      
        <form name="adicionarForm" enctype="multipart/form-data" method="post" action="Controller/controllerBolo.php" class="contact-form" role="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Sabor do bolo</label>
                        <input type="text" name="sabor_bolo" ng-model="sabor_bolo" id="nome-bolo" ng-required="true" class="form-control">
                        
                        <div ng-show="adicionarForm.sabor_bolo.$error.required && !adicionarForm.sabor_bolo.$pristine" class="alert alert-danger">
                            Por favor, digite o sabor do bolo!
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Valor</label>
                        <input type="number" name="preco_bolo" ng-model="preco_bolo" ng-required="true" class="form-control">
                        
                        <div ng-show="adicionarForm.preco_bolo.$error.required && !adicionarForm.preco_bolo.$pristine" class="alert alert-danger">
                            Por favor, digite o valor do bolo!
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-group label-floating">
                <label class="control-label">Descrição</label>
                <textarea class="form-control" name="descricao_bolo" ng-model="descricao_bolo" ng-required="true" ng-minlength="10" rows="4"></textarea>
                
                <div ng-show="adicionarForm.descricao_bolo.$error.required && !adicionarForm.descricao_bolo.$pristine" class="alert alert-danger">
                    Por favor, digite a descrição do bolo!
                </div>
                <div ng-show="adicionarForm.descricao_bolo.$error.minlength && !adicionarForm.descricao_bolo.$pristine" class="alert alert-danger">
                    A descrição do bolo deve ter no minimo 10 caracteres!
                </div>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <button type="submit" name="btEnviar" value="Cadastrar" ng-disabled="adicionarForm.$invalid" class="btn btn-raised btn-primary ">
                        Cadastrar
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
    
</body>
	<?php include 'assets/js/javascript.php'; ?>
</html>