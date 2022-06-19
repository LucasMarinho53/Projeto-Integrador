<?php
    require_once('.\conexao.php');

    # vai retornar true se cadastrar e false se ocorrer uma falha
    function fnAddCliente($Nome, $Email, $Senha, $CPF) {
        # pega a conexão
        $link = getConnection();

        # define a query
        $query = "insert into Cliente(Nome, Email, Senha, CPF) values ('{$Nome}', '{$Email}', '{$Senha}', '{$CPF}')";

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

    function fnListClientes()
    {
        $link = getConnection();

        $query = "select * from Cliente";

        $result = mysqli_query($link, $query);

        $clientes = array();

        while($row = mysqli_fetch_assoc($result))
        {
            array_push($clientes, $row);
        }

        return $clientes;
    }


