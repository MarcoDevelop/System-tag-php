<?php
  //Incluindo conexão com o banco de dados
  include('connection.php');
   
  // Criando conexão com o banco de dados.
  $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

  // $consulta = "SELECT * FROM `TABLE 1` WHERE `COL 2` LIKE 'AAJVGT-CS9'";

  $consulta = "SELECT * FROM `TABLE 1`";
  $con = mysqli_query($conexao, $consulta) or die("#Erro ao acessar registros!");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <link rel="shortcut icon" href="https://static.wixstatic.com/media/289d3f_c2493b3d5671459fab14ba728603bcf7%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/289d3f_c2493b3d5671459fab14ba728603bcf7%7Emv2.png" type="image/png">

  <style>
    body, a {
      font: 400 0.8rem Roboto, sans-serif;
    }

    button {
      color: #f9fafb;
      background: #22c55e;
      border: none;
      border-radius: 6px;
      transition: 0.4s;
      line-height: 1.3rem;
      cursor: pointer;  
    }

    button:hover {
      opacity: 0.7;
    }

    a {
      text-decoration: none;
      color: #f9fafb;
    }

    a:hover {
      text-decoration: none;
      color: #f9fafb;
      opacity: 0.9;
    }

    body {
      background: #e2e8f0;
    }

  </style>

  <title>PACKING LIST</title>
</head>
<body>

  <br>
 
  <div class='container-fluid justify-content-md-center'>

    <h4>PACKING LIST SRF INDUSTRIES (THAILAND) LTD</h4>

    <br>

    <table class="table table-hover Light">
      <thead>
        <tr class="table-secondary">
          <th scope="col">Product</th>
          <th scope="col">Roll N°</th>
          <th scope="col">Mil Roll</th>
          <th scope="col">Code Producto</th>
          <th scope="col">Length</th>
          <th scope="col">Weight</th>
          <th scope="col">External Side</th>
          <th scope="col">Internal Side</th>
          <th scope="col">Width</th>
          <th scope="col">Date</th>
          <th scope="col">Customer Id Reference</th>
          <th scope="col">Client</th>
          <th scope="col">Lot SAP</th>
          <th scope="col">OP SAP</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      
      <tbody>
        <?php
          while($dado = $con -> fetch_array()){
        ?>

        <tr>
          <td><?php echo $dado ['COL 1']; ?></td>
          <td><?php echo $dado ['COL 2']; ?></td>
          <td><?php echo $dado ['COL 3']; ?></td>
          <td><?php echo $dado ['COL 4']; ?></td>
          <td><?php echo $dado ['COL 5']; ?></td>
          <td><?php echo $dado ['COL 6']; ?></td>
          <td><?php echo $dado ['COL 7']; ?></td>
          <td><?php echo $dado ['COL 8']; ?></td>
          <td><?php echo $dado ['COL 9']; ?></td>
          <td><?php echo $dado ['COL 10']; ?></td>
          <td><?php echo $dado ['COL 11']; ?></td>
          <td><?php echo $dado ['COL 12']; ?></td>
          <td><?php echo $dado ['COL 13']; ?></td>
          <td><?php echo $dado ['COL 14']; ?></td>
          <td>
            <?php
              $dado ['COL 15'];   
                if($dado ['COL 15'] == 0){
                echo '<span class="badge badge-danger">Não gerado</span>';
              }else{
                echo '<span class="badge badge-success">Gerado</span>';
              }
            ?>

            <button><a href="./List/etiqueta.php?codigo=<?php echo $dado['COL 2'];?>">Gerar etiqueta</a></button>
          </td>
        </tr>

        <?php
          }
        ?>
      </tbody>
    </table>

  </div>

  <div class="row justify-content-md-center">
    <a style="color: green; font-weight: bold;" href="#">↑ De volta ao topo</a>
  </div>

  <br>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>