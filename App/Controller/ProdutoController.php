<?php


class ProdutoController 
{
    public static function index()
    {
        include 'Model/ProdutoModel.php'; 
        
        $model = new ProdutoModel(); 
        $model->getAllRows(); 
        include 'View/modules/Produto/ListaProduto.php';

    }


    public static function form()
    {
        //echo "oi";

        include 'Model/ProdutoModel.php'; 
        $model = new ProdutoModel();

        if(isset($_GET['id'])) 
            $model = $model->getById( (int) $_GET['id']); 
        
        include 'View/modules/Produto/FormProduto.php'; 
    }


    public static function save()
    {
       include 'Model/ProdutoModel.php'; 

       $model = new ProdutoModel();

       $model->id =  $_POST['id'];
       $model->descricao = $_POST['descricao'];
       $model->id_categoria = $_POST['id_categoria'];
       $model->preco_venda = $_POST['preco_venda'];
       $model->preco_compra = $_POST['preco_compra'];

       $model->save(); 

       header("Location: /produto"); 
    }


    public static function delete()
    {
        include 'Model/ProdutoModel.php'; 

        $model = new ProdutoModel();

        $model->delete( (int) $_GET['id'] ); 

        header("Location: /produto"); 
    }
}