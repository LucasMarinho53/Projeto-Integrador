<?php
    include('geek.php');
    foreach ($_SESSION['carrinho'] as $key => $value){
        echo '<p>Nome: '.$value['nome'].' | Quantidade: '.$value['quantidade'].' | Preço: '.($value['quantidade']*$value['preco']).'</p>';
    }
?>