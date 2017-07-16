<?php
   class CustomerGender {
      /* Member variables */
      var $genderId;
      var $gender;
      
      /* Member functions */
     
      
      function setId($genderId){
      	$this->genderId=$genderId;
      }
      function getGenderId(){
      	 $this->genderId;
      }
      
      function setId($gender){
      	$this->gender=$gender;
      }
      function getGender(){
      	$this->gender;
      }
      
      
   }
?>