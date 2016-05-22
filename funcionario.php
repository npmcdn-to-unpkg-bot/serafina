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
    <br>
    <h2>Lista de Funcionários</h2>
    
    <?php

  include"conexao.php";
  
$sql = "SELECT * FROM usuario WHERE id_tipo_usuario = 2";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo " 
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>RG</th>
                <th>CPF</th>
                <th>Telefone</th>
                <th>Celular</th>
                <th>E-mail</th>
                <th>Tipo</th>
                <th class='text-right'>Alterar</th>
                <th class='text-right'>Excluir</th>

            </tr>
        </thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
            <tbody>   
                <tr>
                    <td>".$row["id_usuario"]."</td>
                    <td>".$row["nome_usuario"]."</td>
                    <td>".$row["rg_usuario"]."</td>
                    <td>".$row["cpf_usuario"]."</td>
                    <td>".$row["tel_usuario"]."</td>
                    <td>".$row["cel_usuario"]."</td>
                    <td>".$row["email_usuario"]."</td>
                    <td>".$row["id_tipo_usuario"]."</td>
                   <td class='td-actions text-right'>
                        <form class='form-inline' action='alterFuncionario.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' value='$row[id_usuario]' name='id'>
                            <button type='submit' rel='tooltip' title='Editar Bolo' class='btn btn-success btn-simple btn-xs'>
                                <i class='fa fa-edit'></i>
                            </button>
                        </form>
                    </td>
                    
                    <td class='td-actions text-right'>
                         <form class='form-inline' action='controller/controllerFuncionario.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' value='$row[id_usuario]' name='id' onclick=\"return confirm('Deseja mesmo excluir?');\">
                            <button type='submit' rel='tooltip' name='btDelete' title='Remover Bolo' class='btn btn-danger btn-simple btn-xs'>
                                <i class='fa fa-times'></i>
                            </button>
                        </form>
                    </td>
                  </tr>
            </tbody>";
    }
    echo "</table>";
} else {
    echo "Nenhum funcionário cadastrado";
}
$conn->close();
   
 ?>
    
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