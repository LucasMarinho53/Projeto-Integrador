<?php

    require_once('./crud.php');

    if(fnAddCliente($_POST['nome'], $_POST['email'], $_POST['senha'], $_POST['cpf'])) 
    {
        $Message = urlencode("Cadastro feito com sucesso!");
        header("Location: cadastro.php?Message=".$Message);;
    } else {
        echo "Ocorreu um erro no cadastro.";
    }
