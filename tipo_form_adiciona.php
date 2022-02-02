<?php
include 'head_menu.php';
?>
<h1>Adiciona Tipo</h1>
<form action="tipo_adiciona.php" method="POST">
    <table class="table">
        <tr>
            <td>Tipo</td>
            <td>
                <input class="form-control" type="text" name="nome">
                <tr>
                    <td><button class="btn btn-primary" type="submit">Adicionar Tipo</button></td>
                </tr>
            </td>
        </tr>
    </table>
</form>
<?php
include 'footer.php'
?>