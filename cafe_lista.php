<?php
$conexao = mysqli_connect('localhost','root','','cafeimentro');
$query = 'SELECT * FROM cafe';
$resultado = mysqli_query($conexao,$query);
?>

<!DOCTYPE html>
<html lang="pt_BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Cafés</title>
</head>
<body>
        <tr>
            <?php
            while($cafe = mysqli_fetch_assoc($resultado)){
            ?>
            <td><?=$cafe['nome']?></td>
            <td><?=$cafe['descricao']?></td>
            <td><?=$cafe['tipo_id']?></td>
            <?php
            }
            ?>
        </tr>
</body>
</html>