<?php 
require_once __DIR__ . '../../../config/Database.php';
require_once __DIR__ . '../../../model/Categorias.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $categoriaModel = new Categorias();

    if (empty($_POST['id'])) {
        
        $salvou = $categoriaModel->Criar($_POST['nome']);
    } else {
        // Editar - se tiver id
        // $salvou = $categoriaModel->Editar($[
        //     'id' => $_POST['id'],
        //     'nome' => $_POST['nome']
        // ]);
    }

    if ($salvou) {
        header('Location:');    
    } else {
        echo "ERRO";
    }

} else {
    header('Location:');
}

?>