<?php
    
    include ('geekcarrinho.php');
    include ('kidscarrinho.php');
    include ('officecarrinho.php');
    include ('roomcarrinho.php');

    foreach ($_SESSION['carrinho'] as $key => $value){  
        echo $value['nome'] . '<br>';
        echo $value['preco'] . '<br>';
        echo $value['quantidade'] . '<br>';
    }

    foreach ($_SESSION['carrinho1'] as $key => $value){
        echo $value['nome'] . '<br>';
        echo $value['preco'] . '<br>';
        echo $value['quantidade'] . '<br>';
    }

    foreach ($_SESSION['carrinho2'] as $key => $value){
        echo $value['nome'] . '<br>';
        echo $value['preco'] . '<br>';
        echo $value['quantidade'] . '<br>';
    }

    foreach ($_SESSION['carrinho3'] as $key => $value){
        echo $value['nome'] . '<br>';
        echo $value['preco'] . '<br>';
        echo $value['quantidade'] . '<br>';
    }
?>