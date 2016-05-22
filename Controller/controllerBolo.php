<?php

if (isset($_POST["btEnviar"])) {

    class upload {

        // atributos
        var $insere;

        function envia() {

            $this->sabor_bolo = $_POST['sabor_bolo'];
            $this->preco_bolo = $_POST['preco_bolo'];
            $this->descricao_bolo = $_POST['descricao_bolo'];
            

            include '../conexao.php';
            

            // incluimos e enviamos para o banco de dados
            $insere = "INSERT INTO bolo (sabor_bolo, preco_bolo, descricao_bolo)
						VALUES ('$this->sabor_bolo','$this->preco_bolo','$this->descricao_bolo')";
            
            if ($conn->query($insere) === TRUE) {
            } else {
             echo "Error: " . $insere . "<br>" . $conn->error;
            }

            $conn->close();

            echo"<script>alert('Bolo Adicionado com Sucesso');</script>";
            echo"<script>window.location.href='../addBolo.php'</script>";

        }

// função envia fim
    }

    //classe upload fim
    $upload = new upload(); //objeto instanciado
    $upload->envia();
}//bt.submit fim

if (isset($_POST["btUpdate"])) {

    class upload {

        // atributos
        var $insere;

        function update() {

            $this->id_bolo = $_POST['id'];
            $this->sabor_bolo = $_POST['sabor_bolo'];
            $this->preco_bolo = $_POST['preco_bolo'];
            $this->descricao_bolo = $_POST['descricao_bolo'];
            

            include '../conexao.php';
            

            // incluimos e enviamos para o banco de dados
            $insere = "UPDATE bolo SET sabor_bolo = '$this->sabor_bolo', preco_bolo = '$this->preco_bolo', descricao_bolo = '$this->descricao_bolo' WHERE id_bolo = '$this->id_bolo';";
            
            if ($conn->query($insere) === TRUE) {
            } else {
             echo "Error: " . $insere . "<br>" . $conn->error;
            }

            $conn->close();

            echo"<script>alert('Bolo inserido com Sucesso');</script>";
            echo"<script>window.location.href='../bolos.php'</script>";
            

        }

// função envia fim
    }

    //classe upload fim
    $upload = new upload(); //objeto instanciado
    $upload->update();
}//bt.submit fim

 if (isset($_POST['btDelete'])) {
            $id = $_POST['id'];
            include '../conexao.php';
            $sql =("DELETE FROM bolo WHERE id_bolo ='$id' ") or die(mysql_error());
                // executa sql
            if ($conn->query($sql) === TRUE) {
                $conn->close();
                echo "<script>window.location.href='../bolos.php'</script>";
              } else {
                 echo "Error deleting record: " . $conn->error;
                }

            $conn->close();
           

            }else{
                echo "Nenhum cadastrado!";
          
        }
?>