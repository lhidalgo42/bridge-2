<?php

class SoapController extends \BaseController {

	public function server(){
		// server
		$options= array('uri'=>'http://localhost/ws');
		$server=new SoapServer(NULL,$options);
		$server->setClass('Acme\Helpers\Soap');
		$server->handle();
	}
    public function client($method,$folio,$type){
        $client = new SoapClient(null, array(
            'location' => "http://52.67.7.37/ws",
            'uri'      => "urn://52.67.7.37/ws",
            'trace'    => 1 ));

        $client->__soapCall("getBase64PDF",array('folio' => $folio,'type' => $type));

        echo("\nDumping request headers:\n"
            .$client->__getLastRequestHeaders());
        echo("\nDumping request:\n".$client->__getLastRequest());
        echo("\nDumping response headers:\n"
            .$client->__getLastResponseHeaders());
        echo("\nDumping response:\n".$client->__getLastResponse());
    }

}