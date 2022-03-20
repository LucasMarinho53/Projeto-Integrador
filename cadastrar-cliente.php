<?php

    require_once('./crud.php');

    if(fnAddCliente($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['cpf'])) 
    {
        echo "Cadastro com sucesso.";
    } else {
        echo "Ocorreu um erro no cadastro.";
    }
