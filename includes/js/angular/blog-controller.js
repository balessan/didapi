function MyBlogListController($scope, $http, $templateCache) {
	$scope.orderProp = 'date';

	var method = "GET";
	var url = "./services/post/list.php";

	$scope.RetrieveAll = function() {
		$http({
			method: method,
			url: url,
			cache: $templateCache
		}).success(function(data){
			$scope.message = "Request OK";
			$scope.posts = data;
		}).error(function(status){
			$scope.status = status;
			$scope.message = "Request Failed";
		});
	};
}
