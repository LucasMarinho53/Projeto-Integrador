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

$itens2 = array(
     ['nome' => 'Quadro - Urso Arqueiro', 'preco' => 'R$ 105,99'],
     ['nome' => 'Quadro - Viagem ao espaço', 'preco' => 'R$ 66,99'],
     ['nome' => 'Quadro - Aventuras em alto Mar', 'preco' => 'R$ 87,99'],
     ['nome' => 'Quadro - Fada dos Desejos', 'preco' => 'R$ 88,99']
);

if(isset($_GET['adicionar'])){
    $idProduto = (int) $_GET['adicionar'];
  
    if(isset($itens2[$idProduto])){
        if(isset($_SESSION['carrinho2'][$idProduto])){
          $_SESSION['carrinho2'][$idProduto]['quantidade']++;
        }else{
          $_SESSION['carrinho2'][$idProduto] = array('quantidade'=>1,
           'nome'=>$itens2[$idProduto]['nome'], 'preco'=>$itens2[$idProduto]['preco']);
        }
        echo '<script>alert("O item foi adicionado ao carrinho.")</script>';
      }else{
        die('O item esta indisponivel no momento');
      }
  }
?>

</body>
</html>