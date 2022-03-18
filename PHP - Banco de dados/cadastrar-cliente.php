<?php

    require_once('./crud.php');

    if(fnAddCliente($_POST['Nome'], $_POST['Email'], $_POST['Senha'], $_POST['Telefone'], $_POST['Celular'], $_POST['CPF'], $_POST['CEP'] , $_POST['Numero'] , $_POST['Complemento'])) 
    {
        echo "Cadastro com sucesso.";
    } else {
        echo "Ocorreu um erro no cadastro.";
    }
