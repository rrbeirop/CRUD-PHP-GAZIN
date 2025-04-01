<?php 

require_once __DIR__ . '/../model/CategoriaModel.php';
require_once __DIR__ . '/../config/Databaseg.php';

$objuser = new CategoriaModel();

if (isset($_POST['cad-categoria'])) {

    $nome = $_POST['nome'];

    $objuser->cadastrar($nome);



}

 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <form action=""method="POST">
    <input type="text"  placeholder="nome">
    <button name="cad-categoria">cadastrar</button>
    </form>
</body>
</html>


