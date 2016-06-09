<?php

/*
|--------------------------------------------------------------------------
| Routes for Login
|--------------------------------------------------------------------------
|
*/
Route::get('/login', ['as' => 'login', 'uses' => 'SessionsController@create']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'SessionsController@destroy']);
Route::resource('sessions', 'SessionsController', ['only' => ['create', 'store', 'destroy']]);
/*
 *
 * WS y HTML view
 *
 */
Route::get('ws/', function(){
	$server = new soap_server();

	//Define our namespace
	$namespace = "http://localhost/ws";


	//Configure our WSDL
	$server->configureWSDL('OverService',$namespace);
	$server->wsdl->schemaTargetNamespace = $namespace;
	$server->decode_utf8 = true;
	$server->soap_defencoding = "UTF-8";

	// Register our method
	$server->register(
			'sendMessage',
			array('name' => 'xsd:string'),
			array('message' => 'xsd:string'),
			$namespace,
			$namespace,
			'rpc',
			'encoded',
			'sendMessage service'
	);

	function sendMessage($name) {
		return "Hi ".$name;
	}

	$server->service(file_get_contents("php://input"));
});
Route::get('/get/{format}/{folio}/{type}','RouteController@index');
Route::get('/client/{method}/{folio}/{type}','SoapController@client');


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
|
*/
Route::group(array('before' => 'auth'), function() {
	######################### RUTAS COMUNES ######################
	Route::get('/', ['as' => 'home', 'uses' => 'UsersController@home']);
});



