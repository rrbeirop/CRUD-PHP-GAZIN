<?php

require_once __DIR__ . '../../../config/Database.php';
require_once __DIR__ . '/../../model/Usuarios.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $telefone = $_POST['telefone'];
    $data_nascimento = $_POST['data_nascimento'];
    $cpf = $_POST['cpf'];

    $usuario = new Usuarios();
    $usuario->Editar($id, $nome, $email, $telefone, $data_nascimento, $cpf);

    echo "Usuário atualizado com sucesso!";
} else {
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $usuario = new Usuarios();
        $buscar = $usuario->BuscarPorId($id);

        $nome = $buscar['nome'] ?? '';
        $email = $buscar['email'] ?? '';
        $telefone = $buscar['telefone'] ?? '';
        $data_nascimento = $buscar['data_nascimento'] ?? '';
        $cpf = $buscar['cpf'] ?? '';
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuário</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../assets/usuarios.css">
</head>

<body>
    <?php require_once __DIR__ . '/../components/navbar.php'; ?>
    <?php require_once __DIR__ . '/../components/sidebar.php'; ?>

    <form action="editar-usuarios.php" method="post">
        <h2>Editar Informações</h2>

        <input type="hidden" name="id" value="<?php echo isset($id) ? $id : ''; ?>">

        <label for="nome">Nome</label>
        <input type="text" name="nome" value="<?php echo $nome; ?>">

        <label for="email">Email</label>
        <input type="email" name="email" value="<?php echo $email; ?>">

        <label for="telefone">Telefone</label>
        <input type="text" name="telefone" value="<?php echo $telefone; ?>">

        <label for="data_nascimento">Data de Nascimento</label>
        <input type="date" name="data_nascimento" value="<?php echo $data_nascimento; ?>">

        <label for="cpf">CPF</label>
        <input type="text" name="cpf" value="<?php echo $cpf; ?>" readonly>

        <input type="submit" value="Salvar">
    </form>
</body>

</html>
