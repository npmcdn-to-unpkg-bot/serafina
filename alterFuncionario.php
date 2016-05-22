<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Serafina Bolos</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <?php include './assets/css/estilos.php'; ?>

</head>

<body>

    <?php include 'Components/header-admin.php';
    
     include"conexao.php";
  
    $id = $_POST['id'];
    echo $id;
    $sql = "SELECT * FROM usuario WHERE id_usuario = $id";
    $result = $conn->query($sql);
    $dataRegistered = $result->fetch_assoc();

   ?>

    <div class="row">
       <h2 class="text-center"><i class="material-icons">face</i> Cadastro de Funcionários</h2>
        <div class="col-md-4 col-md-offset-4">
            <form name="" enctype="multipart/form-data" method="post" action="Controller/controllerFuncionario.php" class="contact-form" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Nome *</label>
                            <input type="text" class="form-control" id="" value=' <?php echo $dataRegistered['nome_usuario']?>' name="nome" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">RG *</label>
                            <input type="text" class="form-control" id="" name="rg" required="required" value=' <?php echo $dataRegistered['rg_usuario']?>' maxlength="20">
                        </div>
                    </div>
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">CPF *</label>
                    <input type="number" class="form-control" value=' <?php echo $dataRegistered['cpf_usuario']?>' id="" name="cpf" required="required" maxlength="14">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Telefone *</label>
                    <input type="tel" class="form-control" id="" name="telefone" value=' <?php echo $dataRegistered['tel_usuario']?>' required="required" maxlength="13">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Celular </label>
                    <input type="text" class="form-control" value=' <?php echo $dataRegistered['cel_usuario']?>' id="" name="celular" maxlength="13">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Email utilizado para login *</label>
                    <input type="email" class="form-control" id="" name="email" value=' <?php echo $dataRegistered['email_usuario']?>' required="required">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Senha *</label>
                    <input type="password" class="form-control" maxlength="18" id="" name="senha" value=' <?php echo $dataRegistered['senha_usuario']?>' required="required">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Confirme a senha *</label>
                    <input type="password" class="form-control" maxlength="18" id="" name="conf_senha" required="required">
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <button type="submit" name="btEnviar" value="Cadastrar" class="btn btn-primary btn-raised">
                            Atualizar
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