<?php

    require_once('./crudproduto.php');

    if(fnAddProdutos($_POST['nome'], $_POST['preço'], $_POST['tema'])) 
    {
        header("Location: cadastroproduto.php");
    } else {
        echo "Ocorreu um erro no cadastro.";
    }