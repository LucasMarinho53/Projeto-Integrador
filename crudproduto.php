<?php
    require_once('.\conexao.php');

    # vai retornar true se cadastrar e false se ocorrer uma falha
    function fnAddProdutos($Nome, $Preço, $Tema) {
        # pega a conexão
        $link = getConnection();

        # define a query
        $query = "insert into Produtos(Nome, Preço, Tema) values ('{$Nome}', '{$Preço}', '{$Tema}')";

        # mysqli_query executa a query no banco
        # retorna true|false - false quando tem erros e true não quando não tem erros
        # ! nega um valor boleano, ou seja, inverte o valor true vira false e false vira true

        $result = mysqli_query($link, $query);

        if(!$result) {
            throw new \Exception("Error ao gravar no banco", 1);
            return false;
        }
        return true;
    }

    function fnListProdutos()
    {
        $link = getConnection();

        $query = "select * from Produtos";

        $result = mysqli_query($link, $query);

        $produtos = array();

        while($row = mysqli_fetch_assoc($result))
        {
            array_push($produtos, $row);
        }

        return $produtos;
    }