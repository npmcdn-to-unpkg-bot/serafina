<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Serafina Bolos</title>

  <?php include './assets/css/estilos.php'; ?>
</head>

<body>

    <?php include 'Components/header-admin.php'; ?>
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <form name="" enctype="multipart/form-data" method="post" action="" class="contact-form" role="form">
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">Nome *</label>
                            <input type="text" class="form-control" id="" name="nome" required="required">
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group label-floating">
                            <label class="control-label">RG *</label>
                            <input type="text" class="form-control" id="" name="rg" required="required" maxlength="20">
                        </div>
                    </div>
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">CPF *</label>
                    <input type="number" class="form-control" id="" name="cpf" required="required" maxlength="14">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Telefone *</label>
                    <input type="tel" class="form-control" id="" name="telefone" required="required" maxlength="13">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Celular </label>
                    <input type="text" class="form-control" id="" name="celular" maxlength="13">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Email utilizado para login *</label>
                    <input type="email" class="form-control" id="" name="email" required="required">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Senha *</label>
                    <input type="password" class="form-control" maxlength="18" id="" name="senha" required="required">
                </div>

                <div class="form-group label-floating">
                    <label class="control-label">Confirme a senha *</label>
                    <input type="password" class="form-control" maxlength="18" id="" name="conf_senha" required="required">
                </div>

                <div class="row">
                    <div class="col-md-4 col-md-offset-4 text-center">
                        <button type="submit" name="btEnviar" value="Cadastrar" class="btn btn-primary btn-raised">
                            Cadastrar
                        </button>
                    </div>
                </div>
            </form>
            
            <?php

if (isset($_POST["btEnviar"])) {

    class upload {

        // atributos
        var $insere;

        function envia() {

            $this->nome = $_POST['nome'];
            $this->cpf = $_POST['cpf'];
            $this->rg = $_POST['rg'];
            $this->telefone = $_POST['telefone'];
            $this->celular = $_POST['celular'];
            $this->email = $_POST['email'];
            $this->senha = sha1($_POST['senha']);
            $this->confSenha = sha1($_POST['conf_senha']);
            $this->tipo = 1;




            //verifica se existe algum arquivo selecionado
            if ($this->nome == false) {
                echo"<script>alert('Preencha o campo Nome');</script>";
                echo"<script>history.back();</script>";
                exit();
            }

            if ($this->rg == false) {
                echo"<script>alert('Preencha o campo RG');</script>";
                echo"<script>history.back();</script>";
                exit();
            }

            if ($this->cpf == false) {
                echo"<script>alert('Preencha o campo CPF');</script>";
                echo"<script>history.back();</script>";
                exit();
            }


            if ($this->telefone == false) {
                echo"<script>alert('Preencha o campo Telefone');</script>";
                echo"<script>history.back();</script>";
                exit();
            }

            if ($this->email == false) {
                echo"<script>alert('Preencha o campo Email');</script>";
                echo"<script>history.back();</script>";
                exit();
            }


            if ($this->senha == false) {
                echo"<script>alert('Preencha o campo Senha');</script>";
                echo"<script>history.back();</script>";
                exit();
            }

            if ($this->confSenha == false) {
                echo"<script>alert('Preencha o campo Confirmar Senha');</script>";
                echo"<script>history.back();</script>";
                exit();
            }

            if ($this->senha != $this->confSenha) {
                echo"<script>alert('Digite novamente a senha ');</script>";
                echo"<script>history.back();</script>";
                exit();
            }

            include 'conexao.php';
            $sqlEmail = "select email_usuario from usuario where email_usuario = '$this->email'";
            $recgc = $conn->query($sqlEmail);
            if ($recgc->num_rows > 0) {
            while($select = mysqli_fetch_array($recgc)){

                $Email = $select["email_usuario"];
            }
            
            if ($this->email == $Email) {
                echo"<script>alert('Este E-Mail de Usuário Já existe !');</script>";
                echo"<script>history.back();</script>";
                exit();
            }
            }

            // incluimos e enviamos para o banco de dados
            $insere = "INSERT INTO usuario (nome_usuario, rg_usuario, cpf_usuario, tel_usuario, cel_usuario, email_usuario, senha_usuario, id_tipo_usuario)
                                        VALUES ('$this->nome','$this->rg','$this->cpf','$this->telefone','$this->celular','$this->email','$this->senha','$this->tipo')";
            
            if ($conn->query($insere) === TRUE) {
            } else {
             echo "Error: " . $insere . "<br>" . $conn->error;
            }

            $conn->close();

            echo"<script>alert('Arquivo Enviado com Sucesso');</script>";
            echo"<script>window.location.href=''</script>";

        }

// função envia fim
    }

    //classe upload fim
    $upload = new upload(); //objeto instanciado
    $upload->envia();
}//bt.submit fim
?>
            
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