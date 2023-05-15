<?php
    include ("conexao.php");

    $consultar_banco = "SELECT * FROM pedido";
    $retorno_consulta = $mysqli->query( $consultar_banco) or die($mysqli->error);
    $qntd_pedidos= $retorno_consulta->num_rows; //retornar quantidade de linhas

?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
        <title>Lista de pedidos</title>
    </head>

    <body>
        <div class="container">
          <h1>Lista - Pedidos</h1>
            <table class="table table-striped">
                <tr>
                    <th>Nome do cliente:</th>
                    <th>Endereço:</th>
                    <th>Telefone:</th>
                    <th>Pedido:</th>
                    <th>Funções</th>
                </tr>
                    <?php
                        while($pedidos = $retorno_consulta -> fetch_assoc()){
                        
                    ?>

                <tr>
                   <td><?php echo $pedidos['nome']; ?></td>
                   <td><?php echo $pedidos['endereco']; ?></td>
                   <td><?php echo $pedidos['telefone']; ?></td>
                   <td><?php echo $pedidos['pedido']; ?></td>
                   <th><a class="btn btn-danger" href="deletar_pedido.php?codigo_pedido=<?php echo $pedidos['id_pedido'];?>">Deletar</a></th>

                   
                </tr>

                <?php
                        }
                    ?>

            </table>
        </div>
    </body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</html>