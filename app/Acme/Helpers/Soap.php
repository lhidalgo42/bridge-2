<?php

namespace Acme\Helpers;

class Soap
{
    /*
     * Save PDF file in a database
     *
     */
    public function PDF($folio,$type,$rut='78345840-3',$cedible = '0'){
        $dte = new DTEController();
        $dte->getDTE($folio,$type,$rut,$cedible);
        return 'ok';
    }
    /*
     * Return PDF in Base64
     *
     *
     */
    public function getBase64PDF($folio,$type,$rut,$cedible){
        $dte = new DTEController();
        $pdf = $dte->getDTE($folio,$type,$rut,$cedible);
        if(isset($pdf['base64']))
            return $pdf['base64'];
        else
            return $pdf;
    }
    /*
     * Return PDF Fileroute
     *
     */
    public function getFilenamePDF($folio,$type,$rut='78345840-3',$cedible = '0'){
        $dte = new DTEController();
        $pdf = $dte->getDTE($folio,$type,$rut,$cedible);
        if(isset($pdf['filename']))
            return $pdf['filename'];
        else
            return $pdf;
    }
}