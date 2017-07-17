angular.module('HajjBagsApp').controller('HajjAppController', ['$scope','dataShare','$location','$http', function($scope,dataShare,$location,$http){
	$scope.ShowItem=function(){
		var product={};
		dataShare.setChoice(product);
		$location.path('/item');
			
	}

	// $scope.GetProducts=function(){
		
	// }
	//$scope.GetProducts()
}])