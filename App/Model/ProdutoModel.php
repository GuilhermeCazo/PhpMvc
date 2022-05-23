<?php


//Criação da Classe Produto Model, para ser a ponte de dados entre a DAO e a CONTROLLER

class ProdutoModel
{
/** Criação das variáveis de acordo com a tabela*/
    public $id, $descricao, $id_categoria, $preco_venda, $preco_compra;

/** Propriedade que armazenas os dados retirados do BD */
    public $rows;

/** O Método criado para salvar no BD o que for preenchido na MODEL*/
    public function save()
    {
        include 'DAO/ProdutoDAO.php'; //inclusão do ProdutoDAO

     //Aqui é chamada a conexão referida no BD pelo método construtor
        $dao = new ProdutoDAO(); 

     //Esse if define se o item vai ser novo ou se vai atualizar um antigo, testando para ver se o id ja existe
        if(empty($this->id))
        {
            //chama o método insert dentro da DAO
            $dao->insert($this);

        } else {

            //chama o método update dentro da DAO
            $dao->update($this); 
        }        
    }


  //Seleciona todas as linhas do BD, para definir como e quantas linhas será mostrada na listagem
    public function getAllRows()
    {
        include 'DAO/ProdutoDAO.php'; 
        
       
        $dao = new ProdutoDAO();

     
        $this->rows = $dao->select();
    }


//Seleciona o ID os itens do BD, para definir quais linhas será mostrada na listagem
    public function getById(int $id)
    {
        include 'DAO/ProdutoDAO.php'; 

        $dao = new ProdutoDAO();

        $obj = $dao->selectById($id); 

        
        return ($obj) ? $obj : new ProdutoModel();

       
    }


    //Método para ativar a função dele, ele recebe o ID de algum item e utiliza esse ID para excluir o campo inteiro que esse ID pertence
      public function delete(int $id)
    {
        include 'DAO/ProdutoDAO.php'; 

        $dao = new ProdutoDAO();

        $dao->delete($id);
    }
}