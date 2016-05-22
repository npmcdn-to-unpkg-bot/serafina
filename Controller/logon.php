<?php

include '../conexao.php';

session_start();
$login = $_POST['login'];
$senha = $_POST['senha'];
$senhaHash = sha1($senha);


$sql = "SELECT * FROM usuario WHERE email_usuario = '$login' AND senha_usuario= '$senhaHash'";
$result = $conn->query($sql);
if($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
		if($row["id_tipo_usuario"]==1){
    		$_SESSION['user'] = $row["id_tipo_usuario"];
   			header('location:../admin.php');
		}
		if($row["id_tipo_usuario"]==2){
    		$_SESSION['user'] = $row["id_tipo_usuario"];
   			header('location:../admin.php');
		}
		if($row["id_tipo_usuario"]==3){
    		$_SESSION['user'] = $row["id_tipo_usuario"];
   			header('location:../index.php');
		}
	}
} else {
    unset ($_SESSION['user']);
    header('location:index.php?erro=true');
}

?>