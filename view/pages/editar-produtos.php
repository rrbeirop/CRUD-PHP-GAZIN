<?php 
require_once __DIR__ . '../../../config/Database.php';
require_once __DIR__ . '../../../model/Produtos.php';

// Verificar se o formulário foi enviado
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $id = $_POST['id'];
    $nome = $_POST['nome'];
    $descricao = $_POST['descricao'];
    $categoria_id = $_POST['categoria_id'];
    $preco = $_POST['preco'];

    // Chamar a função Editar do seu modelo
    $produto = new Produtos(); // Supondo que você tenha uma classe Produto que gerencia as operações
    $produto->Editar($id, $nome, $descricao, $categoria_id, $preco);

    echo "Produto atualizado com sucesso!";
} else {
    // Carregar os dados do produto para edição, se o formulário não foi enviado
    if (isset($_GET['id'])) {
        $id = $_GET['id'];

        $produto = new Produtos();
        $produto_data = $produto->BuscarPorId($id); // Supondo que você tenha um método para buscar produto por ID

        // Preencher as variáveis com os dados do produto
        $nome = $produto_data['nome'];
        $descricao = $produto_data['descricao'];
        $categoria_id = $produto_data['categoria_id'];
        $preco = $produto_data['preco'];
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Produto</title>
</head>
<body>
    <h1>Editar Produto</h1>

    <form action="editar-produtos.php" method="POST">
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required value="<?php echo $nome; ?>"><br><br>

        <label for="descricao">Descrição:</label>
        <textarea id="descricao" name="descricao" required><?php echo $descricao; ?></textarea><br><br>

        <label for="categoria_id">Categoria:</label>
        <select id="categoria_id" name="categoria_id" required>
            <option value="1" <?php if ($categoria_id == 1) echo 'selected'; ?>>Categoria 1</option>
            <option value="2" <?php if ($categoria_id == 2) echo 'selected'; ?>>Categoria 2</option>
            <option value="3" <?php if ($categoria_id == 3) echo 'selected'; ?>>Categoria 3</option>
            <!-- Adicione mais categorias conforme necessário -->
        </select><br><br>

        <label for="preco">Preço:</label>
        <input type="text" id="preco" name="preco" required value="<?php echo $preco; ?>"><br><br>

        <input type="submit" value="Salvar">
    </form>
</body>
</html>


