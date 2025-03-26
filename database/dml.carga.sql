-- DATA MANIPULETE LANGUAGE
-- INSERT, UPDATE, DELETE, SELECT  

--CATEGORIAS --
INSERT INTO categorias (id, nome) VALUES
(1, 'Eletrônicos'),
(2, 'Eletrodomésticos'),
(3, 'Roupas e Acessórios'),
(4, 'Beleza e Cuidados Pessoais'),
(5, 'Saúde e Bem-estar'),
(6, 'Alimentos e Bebidas'),
(7, 'Casa e Decoração'),
(8, 'Esportes e Lazer'),
(9, 'Automotivo'),
(10, 'Brinquedos e Jogos'),
(11, 'Papelaria e Escritório'),
(12, 'Livros e Mídia'),
(13, 'Música e Instrumentos Musicais'),
(14, 'Pet Shop'),
(15, 'Ferramentas e Construção'),
(16, 'Relógios e Óculos'),
(17, 'Energia Solar e Sustentabilidade'),
(18, 'Segurança e Monitoramento'),
(19, 'Viagem e Turismo'),
(20, 'Serviços Digitais');

--Produtos

INSERT INTO produtos (nome, descricao, categoria_id, preco) VALUES
('iPhone 15', 'Smartphone com tela OLED de 6,1 polegadas e chip A17.', 1, 5999.00),
('Geladeira Samsung 520L', 'Geladeira de 520 litros com tecnologia de refrigeração no-frost.', 2, 3499.00),
('Tênis Nike Air Max', 'Tênis de corrida com amortecimento Air Max e design moderno.', 3, 499.90),
('Base Líquida L’Oréal', 'Base líquida de alta cobertura com efeito matte e longa duração.', 4, 89.90),
('Multivitamínico One a Day', 'Suplemento diário para melhorar a saúde geral e aumentar a imunidade.', 5, 69.90),
('Cerveja Artesanal IPA', 'Cerveja artesanal com sabor intenso e amargor característico.', 6, 19.90),
('Sofá Retrátil 3 Lugares', 'Sofá retrátil e reclinável, ideal para conforto e elegância na sua sala.', 7, 1599.00),
('Bicicleta MTB Aro 29', 'Bicicleta de mountain bike com suspensão dianteira e aro 29.', 8, 1899.00),
('Kit de Faróis LED para Carro', 'Kit completo de faróis LED para melhoria da visibilidade do seu veículo.', 9, 299.00),
('Jogo de Tabuleiro Catan', 'Jogo de estratégia onde os jogadores constroem e negociam recursos.', 10, 249.90),
('Caderno Universitário 10 Matérias', 'Caderno espiral com 10 matérias e capa personalizada.', 11, 19.90),
('O Senhor dos Anéis - Edição Especial', 'Edição luxuosa com capa dura e ilustrações exclusivas do clássico de J.R.R. Tolkien.', 12, 149.90),
('Violão Yamaha F310', 'Violão acústico de excelente qualidade, ideal para iniciantes.', 13, 799.00),
('Ração Pedigree Sabor Frango', 'Ração seca para cães, sabor frango e com nutrientes balanceados.', 14, 59.90),
('Furadeira Bosch 600W', 'Furadeira elétrica com 600W de potência e velocidade variável.', 15, 299.90),
('Relógio Casio G-Shock', 'Relógio digital e resistente a impactos, ideal para aventuras.', 16, 399.90),
('Kit Solar 200W', 'Painel solar de 200W com inversor e bateria para armazenamento.', 17, 2599.00),
('Câmera de Segurança Arlo Pro 4', 'Câmera de segurança sem fio com alta definição e visão noturna.', 18, 1299.00),
('Mala de Viagem Samsonite', 'Mala resistente e leve, com compartimentos para organização.', 19, 899.00),
('Curso de Marketing Digital', 'Curso online de marketing digital com módulos sobre SEO, Ads e redes sociais.', 20, 499.00);


--usuarios (10)
