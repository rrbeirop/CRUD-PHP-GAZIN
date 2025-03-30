<?php 

require_once __DIR__ . '../../../config/Database.php';  // Certifique-se de que a conexão com o banco esteja incluída corretamente.
require_once __DIR__ . '../../../model/Categorias.php'; // Certifique-se de que a classe Categorias está corretamente incluída.

if (isset($_GET['id'])) {
    $modo = 'editar';
    $categoriasModel = new Categorias();
    $categoria = $categoriasModel->buscarPorId($_GET['id']);
} else {
    $modo = 'criar';
    $categoria = [
        'id' => '',
        'nome' => '',
    ];
}

if (isset($_POST['id'])) {
    $excluir = new Categorias();
    $excluir->Excluir($_POST['id']);
    // header('Location: categorias.php');
    // exit();
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>
<body>

    <h1>modo == 'editar' ? 'Editar Categoria' : 'Criar Nova Categoria';</h1>

    <!-- Formulário de edição/criação -->
    <form action="categoria_form.php" method="POST">
        <!-- Campo oculto para o ID da categoria, caso seja edição -->
        <input type="hidden" name="id" value="<?php echo $categoria['id']; ?>">

        <label for="nome">Nome da Categoria:</label>
        <input type="text" id="nome" name="nome" required value="<?php echo $categoria['nome']; ?>"><br><br>

        <input type="submit" value="<?php echo $modo == 'editar' ? 'Atualizar' : 'Criar'; ?>">
    </form>

    <?php if ($modo == 'editar' && isset($categoria['id']) && $categoria['id']): ?>
    <!-- Formulário de exclusão -->
    
    <h3>Excluir Categoria</h3>
    <form action="Categorias.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $categoria['id']; ?>">
        <input type="submit" value="Excluir Categoria">
    </form>
    <?php endif; ?>
</body>
</html>
