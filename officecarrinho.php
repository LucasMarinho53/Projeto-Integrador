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

$itens1 = array(
     ['nome' => 'Quadros Abstratos', 'preco' => 'R$ 70,99'],
     ['nome' => 'Quadros especiais - Combinação de Cores', 'preco' => 'R$ 59,99'],
     ['nome' => 'Quadro Flores em Preto e Branco', 'preco' => 'R$ 45,99'],
     ['nome' => 'Quadros Conceitos Abstratos', 'preco' => 'R$ 85,99']
);

if(isset($_GET['adicionar'])){
    $idProduto = (int) $_GET['adicionar'];
  
    if(isset($itens1[$idProduto])){
        if(isset($_SESSION['carrinho1'][$idProduto])){
          $_SESSION['carrinho1'][$idProduto]['quantidade']++;
        }else{
          $_SESSION['carrinho1'][$idProduto] = array('quantidade'=>1,
           'nome'=>$itens1[$idProduto]['nome'], 'preco'=>$itens1[$idProduto]['preco']);
        }
        echo '<script>alert("O item foi adicionado ao carrinho.")</script>';
      }else{
        die('O item esta indisponivel no momento');
      }
  }
?>

</body>
</html>