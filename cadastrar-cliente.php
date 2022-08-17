<?php

    require_once('./crud.php');

    if(fnAddCliente($_POST['Nome'], $_POST['Email'], $_POST['Senha'], $_POST['CPF'])) 
    {
        header("Location: concluido.php");
    } else {
        echo '<script>alert("Ocorreu um erro no cadastro.");</script>';
    }
