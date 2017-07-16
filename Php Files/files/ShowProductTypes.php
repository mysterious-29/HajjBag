<?php
// UserTools.class.php
//header('Content-Type: application/json');
require_once 'Products.php';
require_once 'DB.php';

// get the HTTP method, path and body of the request
$method = $_SERVER['REQUEST_METHOD'];
$request = explode('/', trim($_SERVER['PATH_INFO'],'/'));
$input = json_decode(file_get_contents('php://input'),true);

class ShowProductTypes {

        // Log the user in.
	// First check to see if the username and password match a row in the database.
	// If it is successful, set the session varialbes and store the user object within.
	
	
	
	public  function getProductTypes() {
		
		$DBConn=new DB();
		$conn=$DBConn->connect();
		$result = mysqli_query($conn,"SELECT * FROM products");
		//$result = $conn->query("SELECT * FROM products");
		
		$ProductsList = array();
		while ($obj = $result->fetch_object()) {
			$product=new Products();
		//	printf ("%s (%s)\n", $obj->Name, $obj->CountryCode);
			$product->productId=$obj->PRODUCT_ID;
			$product->productName=$obj->PRODUCT_NAME;
			$product->productDesc=$obj->PRODUCT_DESC;
			$product->productImgUrl=$obj->PRODUCT_IMAGE_URL;
			
			//$ProductsList[]=$product;
			//print_r($product);
			array_push($ProductsList,$product);
		}	
			
		//echo "count($ProductsList)";
		//print_r($ProductsList);
		echo json_encode($ProductsList);
	}
}

$ShowProductTypesObj=new ShowProductTypes();
$ShowProductTypesObj->getProductTypes();
