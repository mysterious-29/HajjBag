<?php
require_once("ProductTypeHandler.php");
		
$view = "";
if(isset($_GET["view"]))
	$view = $_GET["view"];
/*
controls the RESTful services
URL mapping
*/
switch($view){

	case "all":
		// to handle REST Url /mobile/list/
		$productTypeHandler = new ProductTypeHandler();
		$productTypeHandler->getAllProductTypes();
		break;
		
	case "single":
		// to handle REST Url /mobile/show/<id>/
		$productTypeHandler = new ProductTypeHandler();
		$productTypeHandler->getProductById($_GET["id"]);
		break;

	case "" :
		//404 - not found;
		break;
}
?>
