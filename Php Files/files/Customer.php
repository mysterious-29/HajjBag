<?php
   class Customer {
      /* Member variables */
      var $customerId;
      var $customerEmail;
      var $customerMobile;
      var $addressId;
      var $orderId;
      
      /* Member functions */
      function setCustomerId($customerId){
         $this->customerId = $customerId;
      }
      
      function getCustomerId(){
         $this->customerId;
      }
      
      function setCustomerEmail($customerEmail){
         $this->customerEmail = $customerEmail;
      }
      
   function getCustomerEmail(){
         $this->customerEmail;
      }
      
      
      function setCustomerMobile($customerMobile){
      	$this->customerMobile = $customerMobile;
      }
      
      function getCustomerMobile(){
      	$this->customerMobile;
      }
      
      function setAddressId($addressId){
      	$this->addressId = $addressId;
      }
      
      function getAddressId(){
      	$this->addressId;
      }
      
      function setOrderId($orderId){
      	$this->orderId = $orderId;
      }
      
      function getOrderId(){
      	$this->orderId;
      }
      
      
   }
?>