<?php

require_once __DIR__ . '../../../config/Database.php';
require_once __DIR__ . '../../../model/Usuarios.php';

$usuario = new Usuarios();
$listar = $usuario->listar();


if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $excluido = new Usuarios();
    $excluido->Excluir($id);

    // Verificar se a exclusão foi bem-sucedida
    if ($excluido) {
        // Redirecionar com uma mensagem de sucesso
        header("Location: home.php?mensagem=usuário excluído com sucesso");
        exit;
    } else {
        // Redirecionar com uma mensagem de erro
        header("Location: home.php?mensagem=erro ao excluir usuário");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuários</title>

    <link rel="stylesheet" href="../assets/style.css">
</head>

<body>
    <?php require_once __DIR__ . '\..\components\navbar.php'; ?>
    <?php require_once __DIR__ . '\..\components\sidebar.php'; ?>

    <main>

        <table class="table">
            <thead>
                <th>ID</th>
                <th>Nome</th>
                <th>Email</th>
                <th>Telefone</th>
                <th>Data de Nascimento</th>
                <th>CPF</th>
            </thead>
            <tbody>
                <?php foreach ($listar as $usuario) { ?>
                    <tr>
                        <td><?php echo $usuario['id'] ?></td>
                        <td><?php echo $usuario['nome'] ?></td>
                        <td><?php echo $usuario['email'] ?></td>
                        <td><?php echo $usuario['telefone'] ?></td>
                        <td><?php echo $usuario['data_nascimento'] ?></td>
                        <td><?php echo $usuario['cpf'] ?></td>
                        
                        <td>
                            <!-- Visualizar -->
                            <form action="visualizar.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                                <button type="submit">
                                    <span class="material-symbols-outlined">Visualizar</span>
                                </button>
                            </form>

                            <!-- Editar -->
                            <form action="editar-usuarios.php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $usuario['id'] ?>">
                                <button type="submit">
                                    <span class="material-symbols-outlined">Editar</span>
                                </button>
                            </form>

                            <!-- Deletar -->
                            <form action="home.php" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir este usuário?')">
                                <input type="hidden" name="id" value="<?php echo $excluido->Excluir($id);?>">
                                <button type="submit" >
                                    <span class="material-symbols-outlined">Deletar</span>
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
