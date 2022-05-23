<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Pessoa</title>
    <style>
        label, input { display: block; }
    </style>
</head>
<body>
    <fieldset>
        <legend>Cadastro de Pessoa</legend>

        <form method="post" action="/pessoa/form/save">

            <input type="hidden" value="<?= $model->id ?>" name="id" />
            
            <label for="nome">Nome:</label>
            <input id="nome" name="nome" value="<?= $model->nome ?>" type="text" />

            <label for="cpf">CPF:</label>
            <input id="cpf" name="cpf" value="<?= $model->cpf ?>" type="number" />

            <label for="data_nascimento">Data Nascimento:</label>
            <input id="data_nascimento" value="<?= $model->data_nascimento ?>" name="data_nascimento" type="date" />

            <label for="rg">Rg:</label>
            <input id="rg" name="rg" value="<?= $model->nome ?>" type="text" />

            <label for="sexo">Sexo:</label>
            <input id="sexo" name="sexo" value="<?= $model->nome ?>" type="text" />

            <label for="rua">Rua:</label>
            <input id="rua" name="rua" value="<?= $model->nome ?>" type="text" />

            <label for="numero">Numero:</label>
            <input id="numero" name="numero" value="<?= $model->nome ?>" type="text" />

            <label for="id_cidade">Id da cidade:</label>
            <input id="id_cidade" name="id_cidade" value="<?= $model->nome ?>" type="text" />

            <label for="telefone">telefone:</label>
            <input id="telefone" name="telefone" value="<?= $model->nome ?>" type="text" />
            
            <button type="submit">Salvar</button>
        </form>
    </fieldset>

    
</body>
</html>