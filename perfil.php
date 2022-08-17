<?php


$host = "localhost";
$user = "root";
$pass = "";
$banco = "lojaquadros";
$conexao = mysqli_connect($host, $user, $pass) or die(mysqli_error());
mysqli_select_db($conexao,$banco) or die(mysqli_error());



			$sql = "SELECT * FROM CLiente WHERE id_cliente";
			$query = mysqli_query($conexao, $sql);
			$row = mysqli_num_rows ($query);
			if ($row > 0){
				while ($linha = mysqli_fetch_array($query)) {
					$nome = $linha ['Nome'];
					$email = $linha ['Email'];
					$CPF = $linha ['CPF'];
				}
			}

			else {
				echo "Não foi possível acessar os dados. Por favor, tente novamente mais tarde.";
			}
?>