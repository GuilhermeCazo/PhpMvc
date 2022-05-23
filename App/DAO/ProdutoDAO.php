<?php


class ProdutoDAO
{

    
    
    private $conexao;



    public function __construct()
    {
        
        $dsn = "mysql:host=localhost:3307;dbname=db_mvc";

        $this->conexao = new PDO($dsn, 'root', 'etecjau');
    }


    public function insert(ProdutoModel $model)
    {
      
        $sql = "INSERT INTO produto (descricao, id_categoria, preco_venda, preco_compra) VALUES (?, ?, ?, ?) ";
       
        $stmt = $this->conexao->prepare($sql);


        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id_categoria);
        $stmt->bindValue(3, $model->preco_venda);
        $stmt->bindValue(4, $model->preco_compra);

        $stmt->execute();
    }


    public function update(ProdutoModel $model)
    {
        $sql = "UPDATE produto SET descricao=?, id_categoria=?, preco_venda=?, preco_compra=? WHERE id=? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $model->descricao);
        $stmt->bindValue(2, $model->id_categoria);
        $stmt->bindValue(3, $model->preco_venda);
        $stmt->bindValue(4, $model->preco_compra);

        $stmt->bindValue(5, $model->id);
        $stmt->execute();
    }


    public function select()
    {
        $sql = "SELECT * FROM produto ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_CLASS);        
    }


   
    public function selectById(int $id)
    {
        include_once 'Model/ProdutoModel.php';

        $sql = "SELECT * FROM Produto WHERE id = ?";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();

        return $stmt->fetchObject("ProdutoModel"); 


    }

    public function delete(int $id)
    {
        $sql = "DELETE FROM Produto WHERE id = ? ";

        $stmt = $this->conexao->prepare($sql);
        $stmt->bindValue(1, $id);
        $stmt->execute();
    }
}