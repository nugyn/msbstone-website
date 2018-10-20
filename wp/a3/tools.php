<?php

  function topModule($pageTitle) {
    $output = <<<"ASSIGNMENT3"
    <!DOCTYPE html>
<html lang='en'>
  <head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <title>$pageTitle</title>

    <!-- Keep wireframe.css for debugging, add you  r css to style.css -->
    <link id='wireframecss' type="text/css" rel="stylesheet" href="../wireframe.css" disabled>
    <link id='stylecss' type="text/css" rel="stylesheet" href="css/style.css">
    <script src='../wireframe.js'></script>
  </head>

  <body>
    <header>
    <img src='../../media/MSBStone-logo.jpg' = alt ='Melbourne Stone Benchtops'/>

    <nav class= "cool">
      <ul>
        <li><a href=index.php>Home</a></li>
        <li><a href=services.php>Services</a></li>
        <li><a href=cart.php>Cart</a></li>
        <li><a href=login.php>Members</a></li>
      </ul>
    </nav>
  </header>
    <main>
ASSIGNMENT3;
      echo $output;
  }

  function endModule() {
      $outputfoot = <<<"ASSIGNMENT3FOOT"
      </main>

    <footer>
      <div>&copy;<script>
        document.write(new Date().getFullYear());
      </script> Duy Linh Nguyen, s3429599. Lam Hoang Tran, s3714110</div>
      <div>Disclaimer: This website is not a real website and is being developed as part of a School of Science Web Programming course at RMIT University in Melbourne, Australia.</div>
      <div><a href=services.txt>Link to the product spreadsheet</a></div>
      <div><a href=orders.txt>Link to the order spreadsheet</a></div>
      <div><button id='toggleWireframeCSS' onclick='toggleWireframe()'>Toggle Wireframe CSS</button></div>
    </footer>


  </body>



</html>
ASSIGNMENT3FOOT;
      echo $outputfoot;
  }

  function readProducts($filename) {
    $fp = fopen($filename, "r");
    flock($fp, LOCK_SH);
    $headings = fgetcsv($fp, 0, "\t");

    while ($aLineOfCells = fgetcsv($fp, 0, "\t")) {
        $lala = $aLineOfCells;
        $productList[] = array_combine($headings,$lala) ;
    }

    flock($fp, LOCK_UN);
    fclose($fp);
    return $productList;

    }


  function productValue($array, $getvalue, $stuff){
      $result = "";
      $key = count(array_keys($array));
      for($i = 0; $i < $key; $i++ ){
        if($array[$i]["ID"] == $getvalue ){
          $result = $array[$i][$stuff];
        }
      }
      return $result;
    }

    function productOption($array, $getvalue){
        $options = array();
        $key = count(array_keys($array));
        for($i = 0; $i < $key; $i++ ){
          if($array[$i]["ID"] == $getvalue ){
            array_push($options,$array[$i]["Option"] ) ;
          }
        }

        $optionIds = array();
        for($i = 0; $i < $key; $i++ ){
          if($array[$i]["ID"] == $getvalue ){
            array_push($optionIds,$array[$i]["OID"] ) ;
          }
        }

        $result = array_combine($optionIds,$options);
        return $result;
      }

function productCheck($array, $getvalue){
  $k = -1;

  $key = count(array_keys($array));
  for($i = 0; $i < $key; $i++ ){
    if($array[$i]["ID"] == $getvalue ){
      $k = 1;
    }
  }

  if ($k == 1){
    $var = True;
  }
  else if($k == -1) {
    $var = False;
  }

  return $var;
}


function productCheckOption($array, $getvalue,$option){
  $k = -1;

  $key = count(array_keys($array));
  for($i = 0; $i < $key; $i++ ){
    if($array[$i]["ID"] == $getvalue ){
      if($array[$i]["OID"] == $option) {
        $k = 1;
      }
    }
  }

  if ($k == 1){
    $var = True;
  }
  else if($k == -1) {
    $var = False;
  }

  return $var;
}

  function preShow( $arr, $returnAsString=false ) {
  $ret  = '<pre>' . print_r($arr, true) . '</pre>';
  if ($returnAsString)
    return $ret;
  else
    echo $ret;
}

function printMyCode() {
  $lines = file($_SERVER['SCRIPT_FILENAME']);
  echo "<pre class='mycode'>\n";
  foreach ($lines as $lineNo => $lineOfCode)
     printf("%3u: %1s \n", $lineNo, rtrim(htmlentities($lineOfCode)));
  echo "</pre>";
}

function php2js( $arr, $arrName ) {
  $lineEnd="";
  echo "<script>\n";
  echo "  var $arrName = {\n";
  foreach ($arr as $key => $value) {
    echo "$lineEnd    $key : $value";
    $lineEnd = ",\n";
  }
  echo "  \n};\n";
  echo "</script>\n\n";
}

function styleCurrentNavLink( $css ) {
  $here = $_SERVER['SCRIPT_NAME'];
  $bits = explode('/',$here);
  $filename = $bits[count($bits)-1];
  echo "<style>nav a[href$='$filename'] { $css }</style>";
}



?>
