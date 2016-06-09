<?php

namespace Acme\Helpers;

class Soap
{    /*
     *
     * Return PDF in Base64
     *
     */
    public function getBase64PDF($folio,$type){
        $pdf = new \PdfController();
        if($type == 33)
            $data = $pdf->factura($folio);
        if($type == 61)
            $data = $pdf->nc($folio);
        if($type == 56)
            $data = $pdf->nd($folio);
        if($type == 52)
            $data = $pdf->guia($folio);
        if(isset($data['base64']))
            return $data['base64'];
        else
            return $data;
    }
}