<?php

class SoapController extends \BaseController {

	public function server(){
		// server
		$options= array('uri'=>'http://localhost/ws');
		$server=new SoapServer(NULL,$options);
		$server->setClass('Acme\Helpers\Soap');
		$server->handle();
	}
	public function client($method,$host,$folio,$type,$rut,$cedible){
		$client = new SoapClient(null, array(
				'location' => "http://".$host."/ws",
				'uri'      => "urn://186.10.18.50:8000/ws",
				'trace'    => 1 ));

		$client->__soapCall($method,array('folio' => $folio,'type' => $type,'rut' => $rut,'cedible' => $cedible));

		echo("\nDumping request headers:\n"
				.$client->__getLastRequestHeaders());

		echo("\nDumping request:\n".$client->__getLastRequest());

		echo("\nDumping response headers:\n"
				.$client->__getLastResponseHeaders());

		echo("\nDumping response:\n".$client->__getLastResponse());
	}

}