<?php

class PdfController extends \BaseController
{
    public static function factura($folio)
    {
        $html = HtmlController::factura($folio);
        $option = [
            "height" => "1107px",        // allowed units: mm, cm, in, px
            "width" => "844px",            // allowed units: mm, cm, in, px
            //"orientation" => "portrait", // portrait or landscape
            //"border" =>0,
        ];
        $response = Curl::to('localhost:2000/')->withData(array('html' => $html, 'options' => $option, 'rute' => '../mafer/public/pdf/T33F' . $folio . '.pdf'))->post();
        if ($response) {
            header('Content-type: application/pdf');
            header("Content-disposition: attachment;filename=T33F" . $folio . ".pdf");
            header('Content-Disposition: inline; filename=T33F' . $folio . '.pdf"');
            header('Content-Transfer-Encoding: binary');
            header('Content-Length: ' . filesize($response));
            @readfile($response);
        }
    }
    public static function facturaBase64($folio){
        $html = HtmlController::factura($folio);
        $option = [
            "height" => "1107px",        // allowed units: mm, cm, in, px
            "width" => "844px",            // allowed units: mm, cm, in, px
            //"orientation" => "portrait", // portrait or landscape
            //"border" =>0,
        ];
        $response = Curl::to('localhost:2000/')->withData(array('html' => $html, 'options' => $option, 'rute' => '../mafer/public/pdf/T33F'.$folio.'.pdf'))->post();
        if ($response) {
            return base64_encode(file_get_contents($response));
        }
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
        $filename = $dir . '/T61F' . $folio . '.pdf';
        $html = HtmlController::nc($folio);
        $option = [
            "height" => "1107px",        // allowed units: mm, cm, in, px
            "width" => "844px",            // allowed units: mm, cm, in, px
            //"orientation" => "portrait", // portrait or landscape
            //"border" =>0,
        ];
        $response = Curl::to('localhost:2000/')->withData(array('html' => $html, 'options' => $option, 'rute' => '../mafer/public/pdf/T61F' . $folio . '.pdf'))->post();
        if ($response) {
            header('Content-type: application/pdf');
            header("Content-disposition: attachment;filename=T61F" . $folio . ".pdf");
            header('Content-Disposition: inline; filename=T61F' . $folio . '.pdf"');
            header('Content-Transfer-Encoding: binary');
            header('Content-Length: ' . filesize($response));
            @readfile($response);
        }
    }
    public static function ncBase64($folio){
        $html = HtmlController::nc($folio);
        $option = [
            "height" => "1107px",        // allowed units: mm, cm, in, px
            "width" => "844px",            // allowed units: mm, cm, in, px
            //"orientation" => "portrait", // portrait or landscape
            //"border" =>0,
        ];
        $response = Curl::to('localhost:2000/')->withData(array('html' => $html, 'options' => $option, 'rute' => '../mafer/public/pdf/T61F'.$folio.'.pdf'))->post();
        if ($response) {
            return base64_encode(file_get_contents($response));
        }
    }

    public function nb()
    {
        //
    }

}