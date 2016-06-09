<?php

class PdfController extends \BaseController {

	public static function factura($folio){
        $html = HtmlController::factura($folio);
		$option = [
				"height" => "1107px",        // allowed units: mm, cm, in, px
				"width" => "844px",            // allowed units: mm, cm, in, px
			//"orientation" => "portrait", // portrait or landscape
			//"border" =>0,
		];
        $response = Curl::to('localhost:3000/')->withData(array('html' => $html, 'options' => $option, 'rute' => '../mafer/public/pdf/T33F'.$folio.'.pdf'))->post();
        if ($response)
			return array('filename' => $response, 'base64' => base64_encode(file_get_contents($response)));
	}

	public function boleta()
	{
		//
	}

	public function guia()
	{
		//
	}


	public static function nc($folio)
	{
        $dir = base_path('/public/PDF');
        $filename = $dir . '/T33F'.$folio.'.pdf';
        $html = HtmlController::nc($folio);
        $option = [
            "height" => "1107px",        // allowed units: mm, cm, in, px
            "width" => "844px",            // allowed units: mm, cm, in, px
            //"orientation" => "portrait", // portrait or landscape
            //"border" =>0,
        ];
        $response = Curl::post('localhost:3000/',array('html' => $html, 'options' => $option, 'rute' => '/public/PDF/T33F'.$folio.'.pdf'));
        if ($response)
            return array('filename' => $filename, 'base64' => base64_encode(file_get_contents($filename)));
    }

	public function nb()
	{
		//
	}

}