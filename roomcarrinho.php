<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>

<?php

session_start();

$itens3 = array(
     ['nome' => 'Quadros - Parque Central', 'preco' => 'R$ 80,99'],
     ['nome' => 'Quadros - Na Beira da Praia', 'preco' => 'R$ 96,99'],
     ['nome' => 'Quadros - Por do Sol', 'preco' => 'R$ 67,99'],
     ['nome' => 'Quadros - Amanhecer Nas Neves', 'preco' => 'R$ 88,99']
);

if(isset($_GET['adicionar'])){
    $idProduto = (int) $_GET['adicionar'];
  
    if(isset($itens3[$idProduto])){
        if(isset($_SESSION['carrinho3'][$idProduto])){
          $_SESSION['carrinho3'][$idProduto]['quantidade']++;
        }else{
          $_SESSION['carrinho3'][$idProduto] = array('quantidade'=>1,
           'nome'=>$itens3[$idProduto]['nome'], 'preco'=>$itens3[$idProduto]['preco']);
        }
        echo '<script>alert("O item foi adicionado ao carrinho.")</script>';
      }else{
        die('O item esta indisponivel no momento');
      }
  }
?>

</body>
</html>