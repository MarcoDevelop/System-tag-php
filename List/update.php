<?php
  // Dados de acesso ao banco de dados.   
  define('HOST', 'mysql.dbaas.com.br');
  define('USUARIO', '');
  define('SENHA', '');
  define('DB', '');

  // Criando conexão com o banco de dados.
  $connection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

  $rollNumber = $_GET['roll'];

  $query = "UPDATE `TABLE 1` SET `COL 15` = '1' WHERE `COL 2` = '$rollNumber'";

  mysqli_query($connection, $query) or die("# Erro ao tentar atualizar cadastro!");
  mysqli_close($connection);
  
  echo '<script>location.href = "../index.php";</script>';
?>