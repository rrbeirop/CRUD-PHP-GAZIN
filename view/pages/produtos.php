<?php
require_once __DIR__ . '../../../config/Database.php';
require_once __DIR__ . '../../../model/Produtos.php';

$produtos = new Produtos();
$listar = $produtos->listar();

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../assets/style.css">

</head>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>

    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>
        <h1>Produtos</h1>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Preço</th>
            </thead>
            <tbody>
                <?php foreach ($listar as $produto) { ?>
                    <tr>
                        <td><?php echo $produto['id'] ?></td>
                        <td><?php echo $produto['nome'] ?></td>
                        <td><?php echo $produto['descricao'] ?></td>
                        <td><?php echo $produto['preco'] ?></td>
                        <td>
                            <!-- METHODS - Get / Post -->
                            <form action="visualizar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $filme['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        Visualizar
                                    </span>
                                </button>
                            </form>

                            <form action="cadastro.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $filme['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                        Editar
                                    </span>
                                </button>
                            </form>

                            <form action="excluir.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $filme['id'] ?>">
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

 