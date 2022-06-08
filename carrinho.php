<?php
    
    include ('geekcarrinho.php');

    foreach ($_SESSION['carrinho'] as $key => $value){
        echo $value['nome'] . '<br>';
        echo $value['preco'] . '<br>';
        echo $value['quantidade'] . '<br>';
    }
?>