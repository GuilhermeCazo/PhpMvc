<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Produto</title>
    <style>
        label, input  { display: block; }
    </style>
</head>

<body>
    <fieldset>
        <legend>Cadastro de Produto</legend>


        <form method="post" action="/produto/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />

           <label for="descricao">Descrição:</label>
           <input id="descricao" name="descricao" value="<?= $model->descricao ?>" type="text" />

            <label for="id_categoria">ID_Categoria:</label>
            <input id="id_categoria" name="id_categoria" value="<?= $model->id_categoria ?>" type="text" />

            <label for="preco_venda">Preço de Venda:</label>
            <input id="preco_venda" name="preco_venda" value="<?= $model->id_categoria ?>" type="text" />

            <label for="preco_compra">Preço de Compra:</label>
            <input id="preco_compra" name="preco_compra" value="<?= $model->id_categoria ?>" type="text" />

            <button type="submit">Salvar</button>
        </form>
    </fieldset>
</body>

</html>