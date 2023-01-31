<?php
  //Incluindo conexão com o banco de dados
  include('connection.php');

  // Criando conexão com o banco de dados.
  $connection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

  // Alterando o valor da coluna COL 15 para 1.
  $rollNumber = $_GET['roll'];
  $query = "UPDATE `TABLE 1` SET `COL 15` = '1' WHERE `COL 2` = '$rollNumber'";

  mysqli_query($connection, $query) or die("# Erro ao tentar atualizar cadastro!");
  mysqli_close($connection);

  // Redirecionando para a página inicial.
  echo '<script>location.href = "../index.php";</script>';
?>