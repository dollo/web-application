<?php
function multiplica_por_2($numero)
  {
  if(!empty($numero)) return $numero*2;
  else throw new SoapFault("Client", "Debe enviar un valor numerico");

  }

  libxml_disable_entity_loader(false);
  ini_set('soap.wsdl_cache_enabled',0);
  ini_set('soap.wsdl_cache_ttl',0);

  try {
      $server = new SoapServer(null,array("uri"=>"http://test-uri/"));
      $server->addFunction("multiplica_por_2");
      $server->handle();
  }
  catch (SOAPFault $f) {
    print $f->faultstring;
  }
?>
