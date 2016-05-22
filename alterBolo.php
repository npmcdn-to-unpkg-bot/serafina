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
    $sql = "SELECT * FROM bolo WHERE id_bolo = $id";
    $result = $conn->query($sql);
    $dataRegistered = $result->fetch_assoc();

   ?>
   
<div class="row">
   <h2 class="text-center">
   <i class="material-icons">cake</i>Cadastro de Bolos</h2>
    <div class="col-md-4 col-md-offset-4">
        
        <form name="" enctype="multipart/form-data" method="post" action="Controller/controllerBolo.php" class="contact-form" role="form">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <input type='hidden' value=' <?php echo $dataRegistered['id_bolo']?>' name='id'>
                        <label class="control-label">Sabor do bolo</label>
                        <input type="text" name="sabor_bolo" id="nome-bolo" class="form-control"
                            value="<?php echo $dataRegistered['sabor_bolo']; ?>">
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="form-group label-floating">
                        <label class="control-label">Valor</label>
                        <input type="number" name="preco_bolo" class="form-control"
                        value="<?php echo $dataRegistered['preco_bolo']; ?>">
                    </div>
                </div>
            </div>

            <div class="form-group label-floating">
                <label class="control-label">Descrição</label>
                <textarea class="form-control" name="descricao_bolo" rows="4"><?php echo $dataRegistered['descricao_bolo']; ?></textarea>
            </div>

            <div class="row">
                <div class="col-md-4 col-md-offset-4 text-center">
                    <button type="submit" name="btUpdate" value="Cadastrar" class="btn btn-primary btn-raised">
                        Alterar
                    </button>
                </div>
            </div>
        </form>

    </div>
</div>
    
</body>
    <?php include 'assets/js/javascript.php'; ?>
</html>