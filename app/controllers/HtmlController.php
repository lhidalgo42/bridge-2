<?php

class HtmlController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /html
	 *
	 * @return Response
	 */
	public static function factura($folio){
		$data['doc'] = Fac::where('numero','=',$folio)->get()->first();
		$data['cli'] = Cli::where('rut','=',$data['doc']->rutcli)->get()->first();
		$html = View::make('pdf.factura')->with(compact('data'))->render();
		return $html;
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /html/create
	 *
	 * @return Response
	 */
	public function boleta()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /html
	 *
	 * @return Response
	 */
	public function guia()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /html/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public static function nc($folio)
	{
		$data['doc'] = Cre::where('folio','=',$folio)->get()->first();
		$fac = Fac::where('numero','=',$data['doc']->factura)->get()->first();
		$data['cli'] = Cli::where('rut','=',$fac->rutcli)->get()->first();
		return View::make('pdf.notaCredito')->with(compact('data'));
	}

	/**
	 * Show the form for editing the specified resource.
	 * GET /html/{id}/edit
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function nb()
	{
		//
	}
}