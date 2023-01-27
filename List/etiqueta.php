<?php
  //Incluindo conexão com o banco de dados
  include('connection.php');
   
  // Criando conexão com o banco de dados.
  $connection = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

  // Recebe o valor via post do formulário.
  $code = $_GET["codigo"];
    
  //Script SQL
  $query = "SELECT * FROM `TABLE 1` WHERE `COL 2` = '$code'";

  $con = mysqli_query($connection, $query) or die("Erro ao tentar trazer registro");
  $row = $con -> fetch_array();
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">

  <script type="text/javascript" src="../js/jquery.min.js"></script>
  <script type="text/javascript" src="../js/JsBarcode.all.min.js"></script>

  <link rel="stylesheet" href="../styles/style.css">

  <link rel="stylesheet" type="text/css" href="style.css" media="print" />

  <link rel="shortcut icon" href="https://static.wixstatic.com/media/289d3f_c2493b3d5671459fab14ba728603bcf7%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/289d3f_c2493b3d5671459fab14ba728603bcf7%7Emv2.png" type="image/png">

  <style>
    a {
      text-decoration: none;
      color: #f9fafb;
    }

    a:hover {
      text-decoration: none;
      color: #f9fafb;
      opacity: 0.9;
    }
  </style>

  <title>Etiqueta <?php echo $row ['COL 2']; ?></title>
</head>

<body>

  <div id="etiqueta" class="formContainer">
    <div class="headerContainer">
      <header>
        <h3>COUNTRY OF ORIGIN</h3>
        <h2>ECUADOR</h2>
      </header>

      <img class="logo" src="../assets/logo.png" alt="technofilm" width="100" height="36">
    </div>

    <div class="div1">
      <label id="productClick" for="name">Producto / Product:</label>
      <br>
      <strong id="product">
        <?php echo $row ['COL 1']; ?>
      </strong>
    </div>

    <div class="grid-container">
      <div class="item1">
        <label id="millClick">Mill Roll / Mil Roll:</label>
        <br>
        <span id="mill"><?php echo $row ['COL 3']; ?></span>
      </div>
      <div class="item2">
        <label id="rolloClick">Rollo N° / Roll N°:</label>
        <br>
        <span id="rollo"><?php echo $row ['COL 2']; ?></span>
      </div>
      <div class="item3">
        <label id="codProdClick">Producto / Product:</label>
        <br>
        <span id="codProd"><?php echo $row ['COL 4']; ?></span>
      </div>
    </div>

    <div class="div3">
      <label id="lengthClick">Longitud / Length:</label>
      <div>
        <span id="lengthM"><?php echo $row ['COL 5']; ?></span><strong>m /</strong>
        <span id="lengthFt">
          <?php
            $lengthFt = (int)$row['COL 5'] * 3.281;            
            echo $lengthFt;
          ?>
        </span><strong>ft</strong>
      </div>
    </div>

    <div class="div3">
      <label id="weightClick">Peso / Weight:</label>
      <div>
        <span id="weightKg"><?php echo $row ['COL 6']; ?></span><strong>kg /</strong>
        <span id="weightLb">
          <?php
            $weightLb = (int)$row['COL 6'] * 2.205;
            echo $weightLb;
          ?>
        </span><strong>lb</strong>
      </div>
    </div>

    <div class="grid-container2">
      <div class="externalSide">
        <label id="externalSideClick">Cara Externa / External Side:</label>
        <span id="externalSide"><?php echo $row ['COL 7']; ?></span>
      </div>
      <div class="internalSide">
        <label id="internalSideClick">Cara Interna / Internal Side:</label>
        <span id="internalSide"><?php echo $row ['COL 8']; ?></span>
      </div>
    </div>

    <div class="div4">
      <label id="widthClick">Ancho / Width:</label>
      <br>
      <div>
        <strong id="widthMm"><?php echo $row ['COL 9']; ?></strong><strong>mm /</strong>
        <strong id="widthIn">
          <?php
            $widthIn = (int)$row['COL 9'] / 25.4;
            echo number_format($widthIn, 2, '.', '');
          ?>
        </strong><strong>in</strong>
      </div>
    </div>

    <div class="dataCustomer">
      <div class="data">
        <label id="dateClick">Fecha/ Date.</label>
        <br>
        <span id="date"><?php echo $row ['COL 10']; ?></span>
      </div>
      <div class="customer">
        <label id="customerIdReferenceClick">Customer Id Reference.</label>
        <br>
        <span id="customerIdReference"><?php echo $row ['COL 11']; ?></span>
      </div>
    </div>

    <div class="client">
      <label id="clientClick">Client / Cliente:</label>
      <br>
      <strong id="client"><?php echo $row ['COL 12']; ?></strong>
    </div>

    <div class="sap">
      <div class="lotSap">
        <label id="lotSapClick">Lot SAP:</label>
        <br>
        <strong id="lotSap"><?php echo $row ['COL 13']; ?></strong>
      </div>
      <div class="opSap">
        <label id="opSapClick">OP SAP:</label>
        <br>
        <strong id="opSap"><?php echo $row ['COL 14']; ?></strong>
      </div>
    </div>

    <div class="barCode">
      <svg style="text-align:center;" id="barcodeMaterial"></svg>
    </div>

  </div>
  
  <a href="update.php?roll=<?php echo $code;?>">
    <button id="btnImp">Imprimir</button>
  </a>
  
  <a href="../index.php">
    <button>Voltar ao PACKING LIST</button>
  </a>
  
 
  <script>
    //Codigo de barras
    JsBarcode("#barcodeMaterial", "<?php echo $row ['COL 2']; ?>", { height: 50, width: 1.70});
  </script>

  <script src="../js/functionImprimir.js"></script>

  <script src="../js/inputDate.js"></script>

</body>

</html>