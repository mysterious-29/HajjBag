<?php

require_once 'DB.php';
   class Products {
      /* Member variables */
      var $productId;
      var $productName;
      var $productDesc;
      var $productImgUrl;
      
      /* Member functions */
      function setProductId($productId){
         $this->productId = $productId;
      }
      
      function getProductId(){
         $this->productId;
      }
      
      function setProductName($productName){
         $this->productName = $productName;
      }
      
   function getProductName(){
         $this->productName;
      }
      
      
      function setProductDesc($productDesc){
      	$this->productDesc = $productDesc;
      }
      
      function getProductDesc(){
      	$this->productDesc;
      }
      
      function setProductImgUrl($productImgUrl){
      	$this->productImgUrl = $productImgUrl;
      }
      
      function getProductImgUrl(){
      	$this->productImgUrl;
      }
	  
	  //get all products
	  public  function getAllProductTypes() {
		
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
		return $ProductsList;
	}
      
	 public function getProductById($id){
		// $productId=$id;
		
		$DBConn=new DB();
		$conn=$DBConn->connect();
		
	/*	$productData= array (
							array(),
							array(),
							array(),
						};
		*/
		
		/*
		$data=array();
		$genderIdList = array();
		print_r($conn);
		$genderId = mysqli_query($conn,"SELECT DISTINCT GENDER_ID FROM `ITEMS` WHERE PRODUCT_ID=".$id);
		
		
		while ($genderIdObj = $genderId->fetch_object()) {
			array_push($genderIdList,$genderIdObj->GENDER_ID);
			echo $id;
			$gId=$genderIdObj->GENDER_ID;
			
			//echo $genderId;
	  // echo $id;
	  $categoryListID = mysqli_query("SELECT DISTINCT CATEGORY_ID FROM `ITEMS` WHERE
	  PRODUCT_ID=".$id."AND GENDER_ID=".$gId);
	  while ($catId = $categoryListID->fetch_assoc()) {
			echo $catId->CATEGORY_ID;
			}
		
			
	  
   }
  
  // print_r($genderIdList);
   */
   }
   }
?>