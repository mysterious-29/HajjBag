<?php
   class ItemCategory {
      /* Member variables */
      var $categoryId;
      var $categoryName;
      
      /* Member functions */
     
      
      function setCategoryId($categoryId){
      	$this->categoryId=$categoryId;
      }
      function getCategoryId(){
      	 $this->categoryId;
      }
      
      function setCategoryName($categoryName){
      	$this->categoryName=$categoryName;
      }
      function getCategoryName(){
      	$this->categoryName;
      }
      
      
   }
?>