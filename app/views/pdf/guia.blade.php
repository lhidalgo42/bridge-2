<html>
<head>

    <style>
        <!--
        select {
            font-size: 12px;
        }

        A:link {
            text-decoration: none;
            color: blue
        }

        A:visited {
            text-decoration: none;
            color: purple
        }

        1
        A:active {
            text-decoration: red
        }

        A:hover {
            text-decoration: underline;
            color: red
        }

        -->
    </style>
    <style type="text/css">
        <!--
        .ft0 {
            font-style: normal;
            font-weight: bold;
            font-size: 20px;
            font-family: Arial;
            color: #fe0000;
        }

        .ft1 {
            font-style: normal;
            font-weight: normal;
            font-size: 15px;
            font-family: Arial;
            color: #000000;
        }

        .ft2 {
            font-style: normal;
            font-weight: bold;
            font-size: 17px;
            font-family: Arial;
            color: #000000;
        }

        .ft3 {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            font-family: Arial;
            color: #000000;
            text-align: right;
            width: 100%;
        }
        .ft4 {
            font-style: normal;
            font-weight: normal;
            font-size: 12px;
            font-family: Arial;
            color: #000000;
        }

        -->
    </style>
</head>
<body vlink="#FFFFFF" link="#FFFFFF" bgcolor="#ffffff">
<div style="position:absolute;top:0;left:0"><img width="1136" height="1475"
                                                 src="http://localhost/img/pdf/33.png"></div>
<div style="position:absolute;top:217;left:763"><span class="ft0">S.I.I. - SANTIAGO CENTRO</span></div>
<?php
$day = date('d ', strtotime($data['doc']['fecha']));
$m = date('n', strtotime($data['doc']['fecha'])) - 1;
$year = date(' Y', strtotime($data['doc']['fecha']));
$month = ['ENERO', 'FEBRERO', 'MARZO', 'ABRIL', 'MAYO', 'JUNIO', 'JULIO', 'AGOSTO', 'SEPTIEMBRE', 'OCTUBRE', 'NOVIEMBRE', 'DICIEMBRE'];
?>
<div style="position:absolute;top:306;left:135"><span class="ft1">{{$day.' DE '.$month[$m].' DE '.$year}}</span></div>
<div style="position:absolute;top:306;left:49"><span class="ft1">Fecha:</span></div>
<div style="position:absolute;top:334;left:50"><span class="ft1">Señor(es):   </span></div>
<div style="position:absolute;top:361;left:50"><span class="ft1">R.U.T.:                         </span></div>
<div style="position:absolute;top:412;left:50"><span class="ft1">Dirección:            </span></div>
<div style="position:absolute;top:386;left:50"><span class="ft1">Giro:                  </span></div>
<div style="position:absolute;top:334;left:139"><span
            class="ft1">{{$data['cli']->nombre}}</span></div>
<div style="position:absolute;top:361;left:139"><span
            class="ft1">{{$data['cli']->rut}}</span>
</div>
<div style="position:absolute;top:413;left:139"><span
            class="ft1">{{$data['cli']->direccion}}</span></div>
<div style="position:absolute;top:387;left:139"><span
            class="ft1">{{$data['cli']->giro}}</span></div>
<div style="position:absolute;top:309;left:586"><span class="ft1"> Comuna:</span></div>
<div style="position:absolute;top:336;left:586"><span class="ft1">Ciudad:</span></div>
<div style="position:absolute;top:309;left:749"><span
            class="ft1"> {{$data['cli']->comuna}}</span></div>
<div style="position:absolute;top:336;left:749"><span
            class="ft1">{{$data['cli']->ciudad}}</span></div>
<div style="position:absolute;top:387;left:586"><span class="ft1">Condición Venta:</span></div>
<div style="position:absolute;top:387;left:747"><span class="ft1"> {{$data['doc']->condicion}}</span></div>
<div style="position:absolute;top:71;left:799"><span class="ft0">R.U.T.: 76.683.750-6</span></div>
<div style="position:absolute;top:115;left:720"><span class="ft0">GUIA DE DESPACHO ELECTRONICA</span></div>
<div style="position:absolute;top:167;left:846"><span class="ft0">N° {{$data['doc']->numero}}</span>
</div>

<div style="position:absolute;top:222;left:47"><span class="ft1">Sucursal : Avda Fermín Vivaceta 1662 - Independencia</span></div>
<div style="position:absolute;top:204;left:47"><span class="ft1">Sucursal : Avda Fermín Vivaceta 1226 - Independencia</span></div>
<div style="position:absolute;top:186;left:46"><span  class="ft1">Sucursal : Avda Fermín Vivaceta 1218 - Fono: 2 2738 2529 - Independencia</span></div>
<div style="position:absolute;top:168;left:46"><span class="ft1">Sucursal : Avda Fermín Vivaceta 1266 - Fono: 2 2738 0324 - Independencia</span></div>
<div style="position:absolute;top:150;left:46"><span class="ft1">Casa Matriz : Avda Brasil # 99 - B  - Fono: 2 2687 3007 - Santiago Centro</span></div>
<div style="position:absolute;top:56;left:290"><span class="ft2">Luis Fernando Ramos Toro e Hijos Limitada</span></div>
<div style="position:absolute;top:84;left:290"><span class="ft4">SERVICIO DE MECANICA AUTOMOTRIZ, VENTA DE RESPUESTOS</span></div>
<div style="position:absolute;top:106;left:290"><span class="ft4">PARA AUTOMOVILES, ARRIENDO DE JUEGOS ELECTRONICOS</span></div>
<div style="position:absolute;top:128;left:290"><span class="ft4">ARRIENDO DE VEHICULOS, TALLER DE ELECTRICIDAD AUTOMOTRIZ</span></div>
<div style="position:absolute;top:266;left:46"><span class="ft1">Sitio Web: www.automotrizmafer.cl</span></div>
<div style="position:absolute;top:244;left:46"><span class="ft1">Email contacto: contacto@automotrizmafer.cl</span></div>
<div style="position:absolute;top:1361;left:67"><span class="ft3">"El acuse de recibo que se declara en este acto, de acuerdo a lo dispuesto en la letra b) del art. 4°, y la letra c) del Art. 5° de la ley 19.983,</span>
</div>
<div style="position:absolute;top:1376;left:67"><span class="ft3">acredita que la entrega de mercaderías o servicio(s) prestado(s) ha(n) sido recibido(s)".</span>
</div>
<div style="position:absolute;top:1330;left:513"><span class="ft1"> Fecha:</span></div>
<div style="position:absolute;top:1330;left:774"><span class="ft1"> Firma:</span></div>
<div style="position:absolute;top:1309;left:514"><span class="ft1">Rut:</span></div>
<div style="position:absolute;top:1330;left:49"><span class="ft1">Recinto:</span></div>
<div style="position:absolute;top:1309;left:49"><span class="ft1">Nombre:</span></div>
<div style="position:absolute;top:1045;left:833"><span class="ft1"> NETO</span></div>
<div style="position:absolute;top:1083;left:833"><span class="ft1">19%  I.V.A.</span>
</div>
<div style="position:absolute;top:1119;left:833"><span class="ft1">TOTAL</span></div>
<?php $to_text = new Acme\Helpers\NumberToLetterConverter(); ?>
<div style="position:absolute;top:1023;left:49"><span class="ft1">SON: {{$to_text->to_word($data['doc']->total)}}</span></div>
<div style="position:absolute;top:1045;left:589"><span class="ft1"> Exento</span></div>
<div style="position:absolute;top:1083;left:589"><span class="ft1">Descuento</span></div>
<div style="position:absolute;top:1119;left:589"><span class="ft1">Recargo</span></div>
<div style="position:absolute;top:1045;left:799"><span class="ft1">0</span></div>
<div style="position:absolute;top:1083;right:325"><span class="ft1">0</span></div>
<div style="position:absolute;top:1119;left:796"><span class="ft1">0</span></div>
<div style="position:absolute;top:1045;right:80"><span
            class="ft1"> {{number_format($data['doc']->neto,0,",",".")}}</span></div>
<div style="position:absolute;top:1083;right:80"><span class="ft1">{{number_format($data['doc']->iva,0,",",".")}}</span>
</div>
<div style="position:absolute;top:1119;right:80"><span
            class="ft1">{{number_format($data['doc']->total,0,",",".")}}</span></div>
<div style="position:absolute;top:1045;left:672"><span class="ft1">$</span></div>
<div style="position:absolute;top:1083;left:672"><span class="ft1">$</span></div>
<div style="position:absolute;top:1119;left:672"><span class="ft1">$</span></div>
<div style="position:absolute;top:1045;left:921"><span class="ft1"> $</span></div>
<div style="position:absolute;top:1083;left:919"><span class="ft1">$</span></div>
<div style="position:absolute;top:1119;left:921"><span class="ft1">$</span></div>
<div style="position:absolute;top:1190;left:586"><span class="ft1">Observaciones:   </span></div>
<div style="position:absolute;top:1258;left:246"><span class="ft3">Timbre Electrónico S.I.I.</span></div>
<div style="position:absolute;top:1273;left:97"><span class="ft3">Resolución 123
        del {{date('d/m/Y',strtotime('2016-12-12'))}} Verifique Documento: http://www.sii.cl </span></div>
<div style="position:absolute;top:1155;left:588"><span
            class="ft1"> Cancelado por:____________________________________</span></div>
<div style="position:absolute;top:476;left:43"><span class="ft1">Descripción</span></div>
<div style="position:absolute;top:473;left:1047"><span class="ft1"> Valor</span></div>
<?php $c = 1;
$h = 498;?>
    <div style="position:absolute;top:{{$h}};left:40"><span class="ft3">{{$data['doc']->detalle}}</span></div>
    <div style="position:absolute;top:{{$h}};right:42"><span class="ft3"> {{number_format($data['doc']->total,0,",",".")}}</span></div>
    <?php $c++;
    $h = $h + 18;
    ?>


<div style="position:absolute;top:1410;left:50"><span class="ft1">Desarrollado por INGENIERIA RIFCIF www.rifcif.cl</span></div>
</div>
</body>
</html>
