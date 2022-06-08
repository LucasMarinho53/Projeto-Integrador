<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

session_start();

$itens = array(
     ['nome' => 'Quadro - Fantasminhas do Pac-man', 'preco' => '80'],
     ['nome' => 'Quadro - Super Mario Bros', 'preco' => '96'],
);

if(isset($_GET['adicionar'])){
    $idProduto = (int) $_GET['adicionar'];
  
    if(isset($itens[$idProduto])){
        if(isset($_SESSION['carrinho'][$idProduto])){
          $_SESSION['carrinho'][$idProduto]['quantidade']++;
        }else{
          $_SESSION['carrinho'][$idProduto] = array('quantidade'=>1,
           'nome'=>$itens[$idProduto]['nome'], 'preco'=>$itens[$idProduto]['preco']);
        }
        echo '<script>alert("O item foi adicionado ao carrinho.")</script>';
      }else{
        die('O item esta indisponivel no momento');
      }
  }
?>

</body>
</html>
