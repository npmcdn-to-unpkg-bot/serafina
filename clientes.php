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
    <h2>Lista de Clientes Cadastrados</h2>
    
    <?php

  include"conexao.php";
  
$sql = "SELECT * FROM usuario WHERE id_tipo_usuario = 3";
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
                <th class='text-right'>Ação</th>
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
                    <td class='td-actions text-right'>
                        <button type='button' rel='tooltip' title='Ver Perfil' class='btn btn-info btn-simple btn-xs'>
                            <i class='fa fa-user'></i>
                        </button>
                        <button type='button' rel='tooltip' title='Editar Perfil' class='btn btn-success btn-simple btn-xs'>
                            <i class='fa fa-edit'></i>
                        </button>
                        <button type='button' rel='tooltip' title='Remover usuário' class='btn btn-danger btn-simple btn-xs'>
                            <i class='fa fa-times'></i>
                        </button>
                    </td>
                  </tr>
            </tbody>";
    }
    echo "</table>";
} else {
    echo "Nenhum cliente cadastrado :(";
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