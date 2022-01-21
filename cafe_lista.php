<?php
$conexao = mysqli_connect('localhost', 'root', '', 'cafeimentro');
$query = 'SELECT * FROM cafe';
$resultado = mysqli_query($conexao, $query);
?>

<!DOCTYPE html>
<html lang="pt_BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/cafeimetro.css">
    <title>Lista de Cafés</title>
</head>

<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="index.php">Cafeímetro</a>
        <div class="navbar-nav" id="menu_geral">
            <a class="nav-item nav-link" href="cafe_lista.php">Lista de Cafés</a>
            <a class="nav-item nav-link" href="cafe_form_adicionar.php">Adicionar Cafés</a>
            <a class="nav-item nav-link" href="lista_tipos.php">Lista Tipos</a>
            <a class="nav-item nav-link" href="tipo_form_adicionar.php">Adicionar Tipo</a>
            <a class="nav-item nav-link" href="lista_consumo.php">Meu Consumo</a>
        </div>
    </nav>

    <div class="container">
        <div class="principal">
            <table class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Tipo</th>
                </tr>
            </thead>
                <tbody>
                <tr>
                    <?php
                    while ($cafe = mysqli_fetch_assoc($resultado)) {
                    ?>
                <tr>
                    <td><?= $cafe['nome'] ?></td>
                    <td><?= $cafe['descricao'] ?></td>
                    <td><?= $cafe['tipo_id'] ?></td>
                </tr>
            <?php
                    }
            ?>
            </tr>
                </tbody>
               
            </table>
        </div>

    </div>


</body>

</html>