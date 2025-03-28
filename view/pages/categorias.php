<?php
require_once __DIR__ . '../../../config/Database.php';
require_once __DIR__ . '../../../model/Categorias.php';

$categorias = new Categorias();
$listar = $categorias->listar();



if (isset($_GET['id'])) {
    $modo = 'editar';
    $categoriasModel = new Categorias();
    $categorias = $categoriasModel->buscarPorId($_GET['id']);
    
} 
    else {
    $modo = 'criar';
    $categorias = [
        'id' => '',
        'nome' => '',
    ]

    ;};

if (isset($_POST['id'])) {
    $excluir = new Categorias();
    $excluir->Excluir($_POST['id']);
    header('Location: categorias.php');
}


?>


<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>

    
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>


    <main>
        <h1>Categorias</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th> 
                <!-- <th>Descrição</th> -->
            </thead>
            <tbody>
                <?php foreach ($listar as $cat) { ?>

                    <tr>
                        <td><?php echo $cat['id'] ?></td>
                        <td><?php echo $cat['nome'] ?></td>
                        </td>
                        <td>

                            <!-- METHODS - Get / Post -->
                            <form action=".php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $categorias()['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                       Visualizar
                                    </span>
                                </button>
                            </form>

                            <form action=".php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $categorias->buscarPorId()['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        Editar
                                    </span>
                                </button>
                            </form>

                            <form action="excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $categorias->Excluir()['id'] ?>">
                                <button onclick="return confirm('Tem certeza que deseja excluir o filme?')">
                                    <span class="material-symbols-outlined">
                                        Deletar
                                    </span>
                                </button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </main>

    <?php require_once __DIR__ . '\..\components\footer.php'; ?>
</body>
</html>
























