<?php
    include ("conexao.php"); //arquivo php referente ao banco de dados

    if(isset($_GET['codigo_pedido'])){
        $id_pedido = $_GET['codigo_pedido'];
        $sql_consultar = "SELECT * FROM pedido WHERE id_pedido = '$id_pedido'";
        $comando_sql = $mysqli->query($sql_consultar) or die($mysqli->error);
        $pedido = $comando_sql->fetch_assoc();
    }else{
        echo "Não há código de consulta disponível";
    }

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Tela de pedidos</title>
    </head>
    <body>
        <div class="container">
            <h1> Tela de exclusão de pedidos - buteco do Nunes</h1>
            <h1> Id do pedido: <?php echo $pedido['id_pedido']?></h1>
            <p>Nome: <?php echo $pedido['nome']?></p>
            <p>Nome: <?php echo $pedido['endereco']?></p>
            <p>Nome: <?php echo $pedido['telefone']?></p>
            <p>Nome: <?php echo $pedido['pedido']?></p>
</div>

    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</html>

