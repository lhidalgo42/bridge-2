<?php

class RouteController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 * GET /route
	 *
	 * @return Response
	 */
	public function index($format,$folio,$type)
	{
		if($format == 'HTML'){
			if($type == 33){
				return HtmlController::factura($folio);
			}
			if($type == 61){
				return HtmlController::nc($folio);
			}
			if($type == 56){
				return HtmlController::nd($folio);
			}
			if($type == 52){
				return HtmlController::nd($folio);
			}
		}
		if($format == 'PDF'){
			if($type == 33){
				return PdfController::factura($folio);
			}
			if($type == 61){
				return PdfController::nc($folio);
			}
			if($type == 56){
				return PdfController::nd($folio);
			}
			if($type == 52){
				return PdfController::nd($folio);
			}
		}
	}

	/**
	 * Show the form for creating a new resource.
	 * GET /route/create
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 * POST /route
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 * GET /route/{id}
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
	 * GET /route/{id}/edit
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
	 * PUT /route/{id}
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
	 * DELETE /route/{id}
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}