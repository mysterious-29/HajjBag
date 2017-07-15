angular.module('HajjBagsApp').controller('ItemController', ['$scope', function($scope){
	$scope.items={male:[{category_name:'lavitory',items:['paste','brush','napkin']},
						{category_name:'clothing',items:['pant','shirt','lower']}], 
				female:[{category_name:'lavitory',items:['paste-f','brush-lady','tissue paper']},
						{category_name:'clothing',items:['top','one-piece','lower']}]
				}
	
}])