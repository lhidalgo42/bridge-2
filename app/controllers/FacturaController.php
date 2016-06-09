<?php


class FacturaController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /factura
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /factura/create
	 *
	 * @return Response
	 */
	public function create()
	{
		$factura = [
				'Encabezado' => [
						'IdDoc' => [
								'TipoDTE' => 33,
								'Folio' => 1,
						],
						'Emisor' => [
								'RUTEmisor' => '76192083-9',
								'RznSoc' => 'SASCO SpA',
								'GiroEmis' => 'Servicios integrales de informática',
								'Acteco' => 726000,
								'DirOrigen' => 'Santiago',
								'CmnaOrigen' => 'Santiago',
						],
						'Receptor' => [
								'RUTRecep' => '60803000-K',
								'RznSocRecep' => 'Servicio de Impuestos Internos',
								'GiroRecep' => 'Gobierno',
								'DirRecep' => 'Alonso Ovalle 680',
								'CmnaRecep' => 'Santiago',
						],
				],
				'Detalle' => [
						[
								'NmbItem' => 'Cajón AFECTO',
								'QtyItem' => 123,
								'PrcItem' => 923,
						],
						[
								'NmbItem' => 'Relleno AFECTO',
								'QtyItem' => 53,
								'PrcItem' => 1473,
						],
				],
		];
		$caratula = [
			//'RutEnvia' => '11222333-4', // se obtiene de la firma
				'RutReceptor' => '60803000-K',
				'FchResol' => '2014-12-05',
				'NroResol' => 0,
		];

// Objetos de Firma y Folios
		$Firma = new \sasco\LibreDTE\FirmaElectronica($config['firma']);
		$Folios = new \sasco\LibreDTE\Sii\Folios(file_get_contents('xml/folios/33.xml'));

// generar XML del DTE timbrado y firmado
		$DTE = new \sasco\LibreDTE\Sii\Dte($factura);
		$DTE->timbrar($Folios);
		$DTE->firmar($Firma);

// generar sobre con el envío del DTE y enviar al SII
		$EnvioDTE = new \sasco\LibreDTE\Sii\EnvioDte();
		$EnvioDTE->agregar($DTE);
		$EnvioDTE->setFirma($Firma);
		$EnvioDTE->setCaratula($caratula);
		$EnvioDTE->generar();
		if ($EnvioDTE->schemaValidate()) {
			echo $EnvioDTE->generar();
			//$track_id = $EnvioDTE->enviar();
			//var_dump($track_id);
		}

// si hubo algún error se muestra
		foreach (\sasco\LibreDTE\Log::readAll() as $log)
			echo $log,"\n";
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /factura
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /factura/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /factura/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 * PUT /factura/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 * DELETE /factura/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}