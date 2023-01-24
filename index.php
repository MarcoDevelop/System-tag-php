<?php
  // Dados de acesso ao banco de dados.   
  define('HOST', 'sigmaplast.mysql.dbaas.com.br');
  define('USUARIO', 'sigmaplast');
  define('SENHA', 'Yabb11');
  define('DB', 'sigmaplast');
   
  // Criando conexão com o banco de dados.
  $conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');


  $consulta = "SELECT * FROM `TABLE 1` WHERE `COL 2` LIKE 'AAJVGT-CS9'";
  $con = mysqli_query($conexao, $consulta) or die("#Erro ao acessar registros!");
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

  <script type="text/javascript" src="js/jquery.min.js"></script>
  <script type="text/javascript" src="js/JsBarcode.all.min.js"></script>

  <link rel="stylesheet" href="style.css">

  <link rel="stylesheet" type="text/css" href="style.css" media="print" />

  <link rel="shortcut icon" href="https://static.wixstatic.com/media/289d3f_c2493b3d5671459fab14ba728603bcf7%7Emv2.png/v1/fill/w_32%2Ch_32%2Clg_1%2Cusm_0.66_1.00_0.01/289d3f_c2493b3d5671459fab14ba728603bcf7%7Emv2.png" type="image/png">

  <title>Tag JS</title>
</head>

<body>

  <div id="etiqueta" class="formContainer">
    <div class="headerContainer">
      <header>
        <h3>COUNTRY OF ORIGIN</h3>
        <h2>ECUADOR</h2>
      </header>

      <img class="logo" src="assets/logo.png" alt="technofilm" width="100" height="36">
    </div>

    <div class="div1">
      <label id="productClick" for="name">Producto / Product:</label>
      <br>
      <strong id="product">
        <?php
          while($dado = $con -> fetch_array()){
        ?>
          <?php echo $dado ['COL 1']; ?>
        <?php
          }
        ?>
      </strong>
    </div>

    <div class="grid-container">
      <div class="item1">
        <label id="millClick">Mill Roll / Mil Roll:</label>
        <br>
        <span id="mill">0A2206150842</span>
      </div>
      <div class="item2">
        <label id="rolloClick">Rollo N° / Roll N°:</label>
        <br>
        <span id="rollo">AAJVGT-CS1</span>
      </div>
      <div class="item3">
        <label id="codProdClick">Producto / Product:</label>
        <br>
        <span id="codProd">M ST-17</span>
      </div>
    </div>

    <div class="div3">
      <label id="lengthClick">Longitud / Length:</label>
      <div>
        <span id="lengthM">21,000.0</span><strong>m /</strong>
        <span id="lengthFt">68,897.6</span><strong>ft</strong>
      </div>
    </div>

    <div class="div3">
      <label id="weightClick">Peso / Weight:</label>
      <div>
        <span id="weightKg">303.43</span><strong>kg /</strong>
        <span id="weightLb">668.95</span><strong>lb</strong>
      </div>
    </div>

    <div class="grid-container2">
      <div class="externalSide">
        <label id="externalSideClick">Cara Externa / External Side:</label>
        <span id="externalSide">Tratada/Treated</span>
      </div>
      <div class="internalSide">
        <label id="internalSideClick">Cara Interna / Internal Side:</label>
        <span id="internalSide">None</span>
      </div>
    </div>

    <div class="div4">
      <label id="widthClick">Ancho / Width:</label>
      <br>
      <div>
        <strong id="widthMm">940.0</strong><strong>mm /</strong>
        <strong id="widthIn">37.0</strong><strong>in</strong>
      </div>
    </div>

    <div class="dataCustomer">
      <div class="data">
        <label id="dateClick">Fecha/ Date.</label>
        <br>
        <span id="date">24.06.2022</span>
      </div>
      <div class="customer">
        <label id="customerIdReferenceClick">Customer Id Reference.</label>
        <br>
        <span id="customerIdReference">2762</span>
      </div>
    </div>

    <div class="client">
      <label id="clientClick">Client / Cliente:</label>
      <br>
      <strong id="client">SIGMAPLAST DO BRASIL INDUSTRIA E</strong>
    </div>

    <div class="sap">
      <div class="lotSap">
        <label id="lotSapClick">Lot SAP:</label>
        <br>
        <strong id="lotSap">E000238487</strong>
      </div>
      <div class="opSap">
        <label id="opSapClick">OP SAP:</label>
        <br>
        <strong id="opSap">270000005019</strong>
      </div>
    </div>

    <div class="barCode">
      <svg style="text-align:center;" id="barcodeMaterial"></svg>
    </div>

  </div>

  <button id="btnImp">Imprimir</button>

  <script>
    //Codigo de barras
    JsBarcode("#barcodeMaterial", "AAJVGT-CS1", { height: 50, width: 1.70});
  </script>

  <script src="js/functionImprimir.js"></script>

  <script src="js/inputDate.js"></script>

</body>

</html>