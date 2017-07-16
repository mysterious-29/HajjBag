<?php
require_once("SimpleRest.php");
require_once("Products.php");
		
class ProductTypeHandler extends SimpleRest {

	function getAllProductTypes() {	

		$Products = new Products();
		$ProductsData = $Products->getAllProductTypes();

		if(empty($ProductsData)) {
			$statusCode = 404;
			$ProductsData = array('error' => 'No Product found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($ProductsData);
			echo $response;
		} 
	}
	
	
	
	public function encodeJson($responseData) {
		$jsonResponse = json_encode($responseData);
		return $jsonResponse;		
	}
	

	
	public function getProductById($id) {

		$Products = new Products();
		$ProductData = $Products->getProductById($id);


		if(empty($ProductData)) {
			$statusCode = 404;
			$ProductData = array('error' => 'No mobiles found!');		
		} else {
			$statusCode = 200;
		}

		$requestContentType = $_SERVER['HTTP_ACCEPT'];
		$this ->setHttpHeaders($requestContentType, $statusCode);
				
		if(strpos($requestContentType,'application/json') !== false){
			$response = $this->encodeJson($ProductData);
			echo $response;
		} 
	}
}
?>