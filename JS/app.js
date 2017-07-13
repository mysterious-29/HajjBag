(function () {
	angular.module('HajjBagsApp', ['ui.router'])
	.config(function($stateProvider, $urlRouterProvider,$locationProvider) {

    $urlRouterProvider.otherwise('/home');
    

    $stateProvider

        // HOME STATES AND NESTED VIEWS ========================================
        .state('home', {
            url: '/home',
            templateUrl: 'landingPage.html',
            controller:'HajjAppController'
        })

        // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
        .state('products', {
        	url: '/item',
            templateUrl: 'item.html',
            controller:'ItemController'
            // we'll get to this in a bit       
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
	.service('dataShare', [function(obj){
		var itemObj={}
		this.SetData=function(){
			this.itemObj=obj;
		}
		this.GetData=function(){
			return this.itemObj;
		}
	}])
})();