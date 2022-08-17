<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estilo.css"/>
    <link rel="stylesheet" type="text/css" href="css/login.css"/>
    <title>Star Frame</title>
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
                      <li><a class="dropdown-item" style="background: none;" href="relatorio.php">Relatório</a></li>
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

  <div class="d-flex justify-content-center align-itens-center">
  <form class="p-5 rounded shadow" action="cadastrar-cliente.php" method="post" style="width: 30rem;">
    <h2 class="text-center pb-5 display-4">Cadastro</h2>
    <?php if (isset($_GET['error'])) { ?>
      <div class="alert alert-danger" role="alert">
        <?=$_GET['error']?>
    </div>
    <?php } ?>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Nome</label>
    <input class="form-control" type="text" name="Nome" id="nome_id" aria-describedby="emailHelp" placeholder="Digite o seu nome" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">E-mail</label>
    <input class="form-control" type="email" name="Email" id="email_id" placeholder="Digite o seu email" >
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Senha</label>
    <input class="form-control" type="password" name="Senha" id="senha_id"  placeholder="Digite a sua senha">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">CPF</label>
    <input class="form-control" type="number" name="CPF" id="cpf_id" placeholder="Digite o seu CPF" >
  </div>
  <button type="submit" class="btn btn-primary" href="concluido.php" class="btn btn-primary btn-sm">Cadastrar</button>
</form>
</div>

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

        <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>