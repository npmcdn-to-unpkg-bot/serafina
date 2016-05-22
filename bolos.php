<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Serafina Bolos</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <?php include 'assets/css/estilos.php'; ?>

</head>

<body>

    <?php include 'Components/header-admin.php'; ?>
    <br>
    <h2>Lista de Bolos</h2>
    
    <?php

  include"conexao.php";
  

$sql = "SELECT * FROM bolo";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo " 
    <table class='table'>
        <thead>
            <tr>
                <th>ID</th>
                <th>Sabor</th>
                <th>Valor</th>
                <th>Descrição</th>
                <th class='text-right'>Editar</th>
                <th class='text-right'>Excluir</th>
            </tr>
        </thead>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
            <tbody>   
                <tr>
                    <td>".$row["id_bolo"]."</td>
                    <td>".$row["sabor_bolo"]."</td>
                    <td>".$row["preco_bolo"]."</td>
					<td>".$row["descricao_bolo"]."</td>
                    <td class='td-actions text-right'>
                        <form class='form-inline' action='alterBolo.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' value='$row[id_bolo]' name='id'>
                            <button type='submit' rel='tooltip' title='Editar Bolo' class='btn btn-success btn-simple btn-xs'>
                                <i class='fa fa-edit'></i>
                            </button>
                        </form>
                    </td>
                    
                    <td class='td-actions text-right'>
                         <form class='form-inline' action='controller/controllerBolo.php' method='post' enctype='multipart/form-data'>
                            <input type='hidden' value='$row[id_bolo]' name='id' onclick=\"return confirm('Deseja mesmo excluir?');\">
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
    echo "0 results";
}
$conn->close();
   
 ?>
</body>
<?php include 'assets/js/javascript.php'; ?>
</html>