(function () {
	angular.module('HajjBagsApp', ['ui.router'])
	.config(function($stateProvider, $urlRouterProvider,$locationProvider) {

    $urlRouterProvider.otherwise('/home');
    

    $stateProvider
        .state('home', {
            url: '/home',
            templateUrl: 'landingPage.html',
            controller:'HajjAppController'
        })
        .state('products', {
        	url: '/item',
            templateUrl: 'item.html',
            controller:'ItemController'
        });
        //$ locationProvider.html5Mode(true).hashPrefix('!');
    })
	// .controller('HajjAppController', ['$scope','dataShare','$location', function($scope,dataShare,$location){
	// 	$scope.item="item";
	// 	$scope.ItemDetails=function	(){
	// 		dataShare.SetData($scope.item);
	// 		$location.path('/item');
	// 		$scope.item	={}
	// 	}
		
	// }])
	.service('dataShare', ['$http',function($http){
		var productObj={}
		this.getProducts=function(){
		return $http({'url':'http://192.168.0.101:9005/Hajj/files/RestProductController.php?view=all',
				'method':'get',
				"headers":{ 'Content-Type': 'application/x-www-form-urlencoded' ,'Accept':'Access-Control-Allow-Origin'}}
			)
			//return this.productData;
}
this.setChoice=function(data){
	productObj=data;
}
this.getChoice=function(){
	return productObj;
}

		// this.SetData=function(){
		// 	this.itemObj=obj;
		// }
		// this.GetData=function(){
		// 	return this.itemObj;
		// }
	}])
	.controller('AppController',['$scope','dataShare','$location','$anchorScroll',function($scope,dataShare,$location,$anchorScroll){
		var promise=dataShare.getProducts();
		promise.then(function(response){
			$scope.products=response.data;
		console.log($scope.products);

		})
		$scope.showItemPage=function(product){
			dataShare.setChoice(product);
			$location.path('/item');
		}
		$scope.scrollTo = function(id) {
			if($location.url()==='/item'){
				$location.path('/home')
			}
			console.log($location.url())
  // Pass the 'id' as the parameter here, the page will scroll 
  // to the correct place and the URL will remain intact.
  debugger
  $anchorScroll(id);
}
	


	}])
})();