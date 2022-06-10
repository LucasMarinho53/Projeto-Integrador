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
     ['nome' => 'Quadro - Fantasminhas do Pac-man', 'preco' => '80'],
     ['nome' => 'Quadro - Super Mario Bros', 'preco' => '96'],
     ['nome' => 'Quadro - Star Wars -R2D2', 'preco' => '67'],
     ['nome' => 'Quadro - Herói e Vilão de Gotham City - Batman e Coringa', 'preco' => '88'],

     ['nome' => 'Quadro - Urso Arqueiro', 'preco' => '105'],
     ['nome' => 'Quadro - Viagem ao espaço', 'preco' => '66'],
     ['nome' => 'Quadro - Aventuras em alto Mar', 'preco' => '87'],
     ['nome' => 'Quadro - Fada dos Desejos', 'preco' => '88'],

     ['nome' => 'Quadros Abstratos', 'preco' => '70'],
     ['nome' => 'Quadros especiais - Combinação de Cores', 'preco' => '59'],
     ['nome' => 'Quadro Flores em Preto e Branco', 'preco' => '45'],
     ['nome' => 'Quadros Conceitos Abstratos', 'preco' => '85'],
     
     ['nome' => 'Quadros - Parque Central', 'preco' => '80'],
     ['nome' => 'Quadros - Na Beira da Praia', 'preco' => '96'],
     ['nome' => 'Quadros - Por do Sol', 'preco' => '67'],
     ['nome' => 'Quadros - Amanhecer Nas Neves', 'preco' => '88']
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
