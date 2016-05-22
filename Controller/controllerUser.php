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
            $this->tipo = 3;




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

            include '../conexao.php';
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

            echo"<script>alert('Cadastro realizado com Sucesso');</script>";
            echo"<script>window.location.href='../login.php'</script>";

        }

// função envia fim
    }

    //classe upload fim
    $upload = new upload(); //objeto instanciado
    $upload->envia();
}//bt.submit fim
?>