<?php
  function multiplica_por_2($numero)
  {
  return $numero*2;
  }
  libxml_disable_entity_loader(false);
  ini_set('soap.wsdl_cache_enabled',0);
  ini_set('soap.wsdl_cache_ttl',0);
  try {
  $server = new SoapServer(null,array("uri"=>"http://miprimerservicio"));
  $server->addFunction("multiplica_por_2");
  $server->handle();
  }
  catch (SOAPFault $f) print $f->faultstring;
?>
