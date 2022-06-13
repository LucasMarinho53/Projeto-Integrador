<?php
    include ('geekcarrinho.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css" />
    <link rel="stylesheet" type="text/css" href="css/office.css" />
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Star Frame Office</title>
</head>

<body>

  <header class="container-fluid">

    <div class="topo">

    <nav class="navbar navbar-expand-md navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="projeto.html"><img src="img/logo3.svg" width="300px" height="130px" alt="logo da empresa. quadro branco com SF | Star Frame pintado em azul centralizado."></a> <!--logo do site-->
            <button class="navbar-toggler bg-primary" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li id="home" style="width: 150px;" class="nav-item">
                        <a class="nav-link active text-primary" aria-current="page" href="projeto.html"><strong>Home</strong></a> <!--link direcionando outras paginas-->
                    </li>
                    <li id="contato" style="width: 165px;" class="nav-item">
                        <a class="nav-link text-primary" href="contato.html"><strong>Contato</strong></a> <!--link direcionando outras paginas-->
                    </li>
                    <li id="contato" style="width: 165px;" class="nav-item">
                        <a class="nav-link text-primary" href="carrinho.php"><strong>Carrinho</strong></a> <!--link direcionando outras paginas-->
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link text-primary dropdown-toggle" href="#" id="navbarDropdown" role="button" 
                            data-bs-toggle="dropdown" aria-expanded="false">
                            <strong>Quadros</strong>
                        </a> <!--link direcionando outras paginas-->
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" style="background: none;" href="geek.php">Geek</a></li>
                            <li><a class="dropdown-item" style="background: none;" href="office.php">Office</a></li>
                            <li><a class="dropdown-item" style="background: none;" href="kids.php">Kids</a></li>
                            <li><a class="dropdown-item" style="background: none;" href="room.php">Room</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="nav-item dropdown" style="margin-right: 330px;">
                  <button class="btn btn-primary" id="navbarDropdown" role="button" 
                  data-bs-toggle="dropdown" aria-expanded="false">Entrar</button>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" style="background: none;" href="cadastro.php">Cadastro</a></li>
                    <li><a class="dropdown-item" style="background: none;" href="login.php">Login</a></li>
                    <li><a class="dropdown-item" style="background: none;" href="cadastroproduto.php">Cadastrar produto</a></li>
                </ul>
                </form>
            </div>
        </div>
    </nav>
  </div>
  </header>

  <section class="anuncio">
    <div id="anunciotablet">
     <strong>Acessando de um tablet? Aqui você encontra diversos quadros para várias ocasiões.</strong> 
    </div>
    <div id="anunciocelular">
      <strong>Acessando de um celular? Aqui você encontra diversos quadros para várias ocasiões.</strong> 
     </div>
  </section>

  <section class="container">
    
    <table>
      <tr>
        <td><img  class="shadow p-3 mb-5 bg-body rounded" style="margin-top: 30px;" width="400px" alt="Quadros Abstratos - Formas geométricas amarelas pretas e cinzas em diferentes arranjos." src='img/OFFICE/office1.jfif'/></td>
        
        <td style="padding-left: 30px;">
        
        <h2>R$ 70,99 </h2> </h6>2x sem juros</h6>
      </br>
        <h5>Quadros Abstratos </h5> </h6>Tamanho do Quadro(s): 30x42 </h6>
        <a class="btn btn-primary" href="?adicionar=8<php echo $key ?" role="button">Adicionar ao carrinho!</a>
      </td>
      </tr>
     
    </table>

    <table>
      <tr>
        <td><img  class="shadow p-3 mb-5 bg-body rounded" style="margin-top: 30px;" width="400px" alt="Quadros especiais - Combinação de Cores - Quadro com preto e amarelo disputando o espaço nele e outro com branco e amarelo fazendo a mesma coisa." src='img/OFFICE/office2.webp'/></td>
        
        <td style="padding-left: 30px;">
        
        <h2>R$ 59,99 </h2> </h6>2x sem juros</h6>
      </br>
        <h5>Quadros especiais - Combinação de Cores</h5> </h6>Tamanho do Quadro(s): 42x60 </h6>
        <a class="btn btn-primary" href="?adicionar=9<php echo $key ?" role="button">Adicionar ao carrinho!</a>
      </td>
      </tr>
     
    </table>

    <table>
      <tr>
        <td><img  class="shadow p-3 mb-5 bg-body rounded" style="margin-top: 30px;" width="400px" alt="Quadro Flores em Preto e Branco" src='img/OFFICE/office3.webp'/></td>
        
        <td style="padding-left: 30px;">
        
        <h2>R$ 45,99 </h2> </h6>2x sem juros</h6>
      </br>
        <h5>Quadro Flores em Preto e Branco</h5> </h6>Tamanho do Quadro(s): 50x70 </h6>
        <a class="btn btn-primary" href="?adicionar=10<php echo $key ?" role="button">Adicionar ao carrinho!</a>
      </td>
      </tr>
     
    </table>

   <table>
      <tr>
        <td><img  class="shadow p-3 mb-5 bg-body rounded" style="margin-top: 30px;" width="400px" alt="Quadros Conceitos Abstratos - Tons de rosa e azul fazendo diferentes formas e combinações abstratas." src='img/OFFICE/office4.webp'/></td>
        
        <td style="padding-left: 30px;">
        
        <h2>R$ 85,99 </h2> </h6>2x sem juros</h6>
      </br>
        <h5>Quadros Conceitos Abstratos </h5> </h6>Tamanho do Quadro(s): 42x60 </h6>
        <a class="btn btn-primary" href="?adicionar=11<php echo $key ?" role="button">Adicionar ao carrinho!</a>   
      </td>
      </tr>
     
    </table>

  </section>

  <footer class="container-foot text-center text-white"> <!-- Footer -->
  
    <div class="container p-4"> <!-- Grid container -->
      
      <section class="quemsomos col-4 mt-2 text-primary"> <!-- Section: Text -->
        <p>
         <strong> Somos uma empresa especializada em vendas de quadros personalizados, com mais de 20 anos de experiência no mercado. Nós siga! </strong>
        </p>
      </section> <!-- Section: Text -->
      
      
      <section class="links"> <!-- Section: Links -->
        
        <div class="row"> <!--Grid row-->
          
          <div id="footerlink" class="col-lg-3 col-md-6 mb-4"> <!--Grid column-->
            <ul class="list-unstyled mb-0">
              <li>
                <a href="projeto.html" class="text-primary"><strong>Home</strong></a>
              </li>
              <li>
                <a href="contato.html" class="text-primary"><strong>Contato</strong></a>
              </li>
              <li>
                <a href="cadastro.php" class="text-primary"><strong>Cadastro</strong></a>
              </li>
              <li>
                <a href="login.php" class="text-primary"><strong>Login</strong></a>
              </li>
            </ul>
          </div> <!--Grid column-->
          
        </div> <!--Grid row-->
        
      </section> <!-- Section: Links -->
      
    </div> <!-- Grid container -->
    
    <section class="mapa"> <!--section Google Maps-->
      <div id="shoppingmapa">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3679.0670406749236!2d-43.46734638503699!3d-22.76289318508516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9967f809a644a3%3A0x9c3ec3d5526e1803!2sShopping%20Nova%20Igua%C3%A7u!5e0!3m2!1spt-BR!2sbr!4v1647020642078!5m2!1spt-BR!2sbr" width="400" height="200" loading="lazy"></iframe>
      </div>
    </section>
  
      <a class="navbar-brand" href="projeto.html"><img src="img/logo3.svg" width="300px" height="230px" alt="logo da empresa. quadro branco com SF | Star Frame pintado em azul centralizado." id="logofooter"></a>
  
    <div class="text-center p-3 text-primary" style="background-color: rgba(0, 0, 0, 0.2);"> <!-- Copyright -->
      &copy; <strong>Todos os direitos reservados 2022.</strong>
    </div> <!-- Copyright -->
    
  </footer> <!-- Footer -->

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>
</body>
</html>