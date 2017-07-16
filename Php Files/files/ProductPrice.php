<?php
   class Products {
      /* Member variables */
      var $productId;
      var $genderId;
      var $productPrice;
      
      
      /* Member functions */
      function setProductId($productId){
         $this->productId = $productId;
      }
      
      function getProductId(){
         $this->productId;
      }
      
      function setGenderId($genderId){
         $this->genderId = $genderId;
      }
      
   function getGenderId(){
         $this->genderId;
      }
      
      
      function setProductPrice($productPrice){
      	$this->productPrice = $productPrice;
      }
      
      function getProductPrice(){
      	$this->productPrice;
      }
      
      
      
   }
?>