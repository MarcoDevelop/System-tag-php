<?php
  // Dados de acesso ao banco de dados.   
  define('HOST', 'sigmaplast.mysql.dbaas.com.br');
  define('USUARIO', 'sigmaplast');
  define('SENHA', 'Yabb11');
  define('DB', 'sigmaplast');
   
  // Criando conexão com o banco de dados.
  $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


  $consulta = "SELECT * FROM `TABLE 1` WHERE `Roll_N` LIKE 'AAJVGT-CS9'";
  $con = mysqli_query($conexao, $consulta) or die("#Erro ao acessar registros!");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

<?php
  while($dado = $con -> fetch_array()){
?>
  <h1><?php echo $dado ['Product']; ?></h1>
<?php
  }
?>
  
</body>
</html>