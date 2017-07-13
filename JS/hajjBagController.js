angular.module('HajjBagsApp').controller('HajjAppController', ['$scope','dataShare','$location', function($scope,dataShare,$location){
	$scope.ShowItem=function(){
				dataShare.SetData($scope.item);
			$location.path('/item');
			$scope.item	={}
	}
}])