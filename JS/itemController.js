angular.module('HajjBagsApp').controller('ItemController', ['$scope','dataShare', function($scope,dataShare){
	var product={};
	$scope.selProduct=dataShare.getChoice();
	$scope.$on('selectionChanged',function(event,product){
		$scope.selProduct=product;
		//$scope.$apply();
	})
	$scope.itemPrices={male:500,female:600,child:400};
	$scope.items={male:[{category_name:'lavitory',items:['paste-men','brush','napkin']},
						{category_name:'clothing',items:['pant','shirt','lower']}], 
				female:[{category_name:'lavitory',items:['paste-f','brush-lady','tissue paper']},
						{category_name:'clothing',items:['top','one-piece','lower']}],
				child:[{category_name:'lavitory',items:['paste small','brush-small','tissue paper']},
						{category_name:'clothing',items:['T-shirt','Jean','Lower']}]		
				};
	$scope.item2Prices={male:700,female:850,child:600};
	$scope.items2={male:[{category_name:'lavitory',items:['paste-men','brush 2','napkin','More tissue']},
						{category_name:'clothing',items:['pant','shirt','lower']}], 
				female:[{category_name:'lavitory',items:['paste-f','brush-lady','tissue paper']},
						{category_name:'clothing',items:['top','one-piece','lower']}],
				child:[{category_name:'lavitory',items:['paste small','brush-small','tissue paper']},
						{category_name:'clothing',items:['T-shirt','Jean','Lower']}]		
				};
	$scope.buyNow=false;
	$scope.childItemQty=0;
	$scope.maleItemQty=0;
	$scope.femaleItemQty=0;
	$scope.cartItems='';
	$scope.AddToCart=function(genderType){
		if(genderType===1){
			var maleStr="Men Bags: "+$scope.maleItemQty;
		}
		else if (genderType===2) {
			var femaleStr="Women Bags: "+$scope.femaleItemQty;
		}
		else if (genderType===3) {
			var childStr="Women Bags: "+$scope.childItemQty;
		}
		$scope.cartItems=maleStr+" "+ femaleStr+" "+childStr;
	}
	$scope.totalQty=$scope.maleItemQty+$scope.femaleItemQty+$scope.childItemQty;
	$scope.BuyNow=function(){
		$scope.buyNow=true;
		$totalAmount=$scope.maleItemQty*$scope.itemPrices.male+$scope.femaleItemQty*$scope.itemPrices.female+$scope.childItemQty*$scope.itemPrices.child;
	}
	
}])