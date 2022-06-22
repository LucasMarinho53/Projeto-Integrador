<?php

    require_once('./crudproduto.php');

    if(fnAddProdutos($_POST['Nome'], $_POST['Preço'], $_POST['Tema'])) 
    {
        header("Location: concluidoproduto.php");
    } else {
        echo "Ocorreu um erro no cadastro.";
    }