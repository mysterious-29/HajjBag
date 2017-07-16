angular.module('HajjBagsApp').controller('HajjAppController', ['$scope','dataShare','$location','$http', function($scope,dataShare,$location,$http){
	$scope.ShowItem=function(){
				dataShare.SetData($scope.item);
			$location.path('/item');
			
	}

	// $scope.GetProducts=function(){
		
	// }
	//$scope.GetProducts()
}])