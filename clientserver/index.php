<!DOCTYPE html>
<head>
<title>Prueba de cliente</title>
</head>
<body>
  <?php
  libxml_disable_entity_loader(false);
  $location = "http://localhost:8000/miserver.php";
  $client = new SoapClient (null, array('location'=>$location,
  'uri'=>"http://miprimerservicio", 'trace'=>1));
  $numero = 153;
  //$resultado=$client->multiplica_por_2($numero);
  //print($numero." * 2 = ".$resultado);

  try {
  $resultado = $client->multiplica_por_2($numero);
  print("El producto de 2*".$numero." es ".$resultado);
  }
  catch (SoapFault $error)
  {
  echo $error->faultstring;
  echo htmlspecialchars($client->__getLastResponse(),
  ENT_QUOTES);
  }

  echo '<b>Petición</b>';
  echo htmlspecialchars($client->__getLastRequest(), ENT_QUOTES);
  echo '<b>Respuesta</b>';
  echo htmlspecialchars($client->__getLastResponse(), ENT_QUOTES);
  ?>
</body>
</html>
