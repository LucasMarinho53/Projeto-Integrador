<?php

include "perfil.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <title>Document</title>
</head>
<body>
    <div class="d-flex justify-content-center align-itens-center flex-column">
    <i class="bi bi-person-fill" style="font-size: 14rem;"></i>
        Você conseguiu logar com sucesso!

        <?php
		
			echo "<b>Nome:</b> $nome";
			echo "<b>E-mail:</b> $email";
			echo "<b>CPF:</b> $CPF";
	?>
         
        <a href="logout.php" class="btn btn-warning">SAIR</a>
    </div>
</body>
</html>