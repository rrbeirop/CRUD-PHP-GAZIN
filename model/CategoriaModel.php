<?php 

 class CategoriaModel extends Databaseg
 {
    public int $id;
    public string $nome;

    public function cadastrar($nome)
    {
        $db = new Databaseg( 'categorias' );

        $res = $db->insert(['nome' => $nome]);

        return $res;

        
    }
 }


?>