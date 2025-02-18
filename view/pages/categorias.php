<?php
$categorias = [
    [
        'id' => '1',
        'nome' => 'Eletrônicos',
        'descricao' => 'Dispositivos como smartphones, notebooks e tablets.'
    ],
    [
        'id' => '2',
        'nome' => 'Eletrodomésticos',
        'descricao' => 'Produtos para o lar como geladeiras, fogões e máquinas de lavar.'
    ],
    [
        'id' => '3',
        'nome' => 'Roupas e Acessórios',
        'descricao' => 'Moda masculina, feminina e infantil, incluindo calçados.'
    ],
    [
        'id' => '4',
        'nome' => 'Beleza e Cuidados Pessoais',
        'descricao' => 'Produtos de maquiagem, perfumes e skincare.'
    ],
    [
        'id' => '5',
        'nome' => 'Saúde e Bem-estar',
        'descricao' => 'Suplementos, vitaminas e produtos para cuidados pessoais.'
    ],
    [
        'id' => '6',
        'nome' => 'Alimentos e Bebidas',
        'descricao' => 'Itens de mercado, bebidas e produtos gourmet.'
    ],
    [
        'id' => '7',
        'nome' => 'Casa e Decoração',
        'descricao' => 'Móveis, iluminação e artigos de decoração.'
    ],
    [
        'id' => '8',
        'nome' => 'Esportes e Lazer',
        'descricao' => 'Equipamentos esportivos, roupas fitness e bicicletas.'
    ],
    [
        'id' => '9',
        'nome' => 'Automotivo',
        'descricao' => 'Peças, acessórios e produtos para veículos.'
    ],
    [
        'id' => '10',
        'nome' => 'Brinquedos e Jogos',
        'descricao' => 'Jogos de tabuleiro, brinquedos educativos e eletrônicos.'
    ],
    [
        'id' => '11',
        'nome' => 'Papelaria e Escritório',
        'descricao' => 'Materiais escolares, organizadores e móveis para escritório.'
    ],
    [
        'id' => '12',
        'nome' => 'Livros e Mídia',
        'descricao' => 'Livros físicos, e-books e materiais educativos.'
    ],
    [
        'id' => '13',
        'nome' => 'Música e Instrumentos Musicais',
        'descricao' => 'Instrumentos, acessórios e equipamentos de áudio.'
    ],
    [
        'id' => '14',
        'nome' => 'Pet Shop',
        'descricao' => 'Rações, brinquedos e acessórios para pets.'
    ],
    [
        'id' => '15',
        'nome' => 'Ferramentas e Construção',
        'descricao' => 'Materiais para reformas, ferramentas e equipamentos de segurança.'
    ],
    [
        'id' => '16',
        'nome' => 'Relógios e Óculos',
        'descricao' => 'Relógios de pulso, óculos de grau e de sol.'
    ],
    [
        'id' => '17',
        'nome' => 'Energia Solar e Sustentabilidade',
        'descricao' => 'Placas solares, lâmpadas LED e produtos ecológicos.'
    ],
    [
        'id' => '18',
        'nome' => 'Segurança e Monitoramento',
        'descricao' => 'Câmeras de segurança, alarmes e fechaduras eletrônicas.'
    ],
    [
        'id' => '19',
        'nome' => 'Viagem e Turismo',
        'descricao' => 'Mochilas, malas de viagem e acessórios para turismo.'
    ],
    [
        'id' => '20',
        'nome' => 'Serviços Digitais',
        'descricao' => 'Cursos online, assinaturas e consultorias digitais.'
    ]
        
];

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
                <th>Descrição</th>
            </thead>
            <tbody>
                <?php foreach ($categorias as $categoria) { ?>

                    <tr>
                        <td><?php echo $categoria['id'] ?></td>
                        <td><?php echo $categoria['nome'] ?></td>
                        <td><?php echo $categoria['descricao'] ?></td>
                        <td>

                            <!-- METHODS - Get / Post -->
                            <form action=".php" method="GET">
                                <input type="hidden" name="id" value="<?php echo $filme['id'] ?>">
                                <button>
                                    <span class="material-symbols-outlined">
                                       Visualizar
                                    </span>
                                </button>
                            </form>

                            <form action=".php" method="GET">
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
























