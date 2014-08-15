function MyBlogListController($scope, $sce, $http, $templateCache) {
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
			for (var $post in $scope.posts) {
				$post.content = deliberatelyTrustDangerousSnippet($post.content);
			}
		}).error(function(status){
			$scope.status = status;
			$scope.message = "Request Failed";
		});
	};

	function deliberatelyTrustDangerousSnippet($data) {
		return $sce.trustAsHtml($data);
	};
};
