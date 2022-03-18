<?php
    require_once('.\conexao.php');

    # vai retornar true se cadastrar e false se ocorrer uma falha
    function fnAddCliente($Nome, $Email, $Senha, $Telefone, $Celular, $CPF, $CEP, $Numero, $Complemento) {
        # pega a conexão
        $link = getConnection();

        # define a query
        $query = "insert into Cliente(CPF, Nome) values ('{$CPF}', '{$Nome}', '{$Telefone}'), '{$Celular}'";
        $query = "insert into login_cliente(Email, Senha) values ('{$Email}', '{$Senha}'";
        $query = "insert into Endereco(Numero, Complemento, CEP) values ('{$Numero}', '{$Complemento}', '{$CEP}'";

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

        $query = "select * from Clientes";

        $result = mysqli_query($link, $query);

        $Clientes = array();

        while($row = mysqli_fetch_assoc($result))
        {
            array_push($Clientes, $row);
        }

        return $Clientes;
    }


