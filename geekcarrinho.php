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

$itens = array(
     ['nome' => 'Quadro - Fantasminhas do Pac-man', 'preco' => 'R$ 80,99'],
     ['nome' => 'Quadro - Super Mario Bros', 'preco' => 'R$ 96,99'],
     ['nome' => 'Quadro - Star Wars -R2D2', 'preco' => 'R$ 67,99'],
     ['nome' => 'Quadro - Herói e Vilão de Gotham City - Batman e Coringa', 'preco' => 'R$ 88,99'],

     ['nome' => 'Quadro - Urso Arqueiro', 'preco' => 'R$ 105,99'],
     ['nome' => 'Quadro - Viagem ao espaço', 'preco' => 'R$ 66,99'],
     ['nome' => 'Quadro - Aventuras em alto Mar', 'preco' => 'R$ 87,99'],
     ['nome' => 'Quadro - Fada dos Desejos', 'preco' => 'R$ 88,99'],

     ['nome' => 'Quadros Abstratos', 'preco' => 'R$ 70,99'],
     ['nome' => 'Quadros especiais - Combinação de Cores', 'preco' => 'R$ 59,99'],
     ['nome' => 'Quadro Flores em Preto e Branco', 'preco' => 'R$ 45,99'],
     ['nome' => 'Quadros Conceitos Abstratos', 'preco' => 'R$ 85,99'],
     
     ['nome' => 'Quadros - Parque Central', 'preco' => 'R$ 80,99'],
     ['nome' => 'Quadros - Na Beira da Praia', 'preco' => 'R$ 96,99'],
     ['nome' => 'Quadros - Por do Sol', 'preco' => 'R$ 67,99'],
     ['nome' => 'Quadros - Amanhecer Nas Neves', 'preco' => 'R$ 88,99']
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
