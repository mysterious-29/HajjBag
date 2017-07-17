angular.module('HajjBagsApp').controller('HajjAppController', ['$scope','dataShare','$location','$http', function($scope,dataShare,$location,$http){
	var product={};
	$scope.ShowItem=function(product){
		
		dataShare.setChoice(product);
		$scope.$broadcast('selectionChanged',product);
		$location.path('/item');
			
	}

	// $scope.GetProducts=function(){
		
	// }
	//$scope.GetProducts()
}])