function ContactListController($scope, $http, $templateCache) {
	$scope.orderProp = 'date';

	var method = "GET";
	var url = "../services/contact/list.php";

	$http({
		method: method,
		url: url,
		cache: $templateCache
	}).success(function(data){
		$scope.message = "Request OK";
		$scope.messages = data;
	}).error(function(status){
		$scope.status = status;
		$scope.message = "Request Failed";
	});
}

function ContactDetailController($scope, $http, $routeParams) {
	$scope.messageId = $routeParams.id;

	$http.get('../services/contact/detail.php?id=' + $scope.messageId).success(function(data){
		$scope.message = data;
	});
}

function PostListController($scope, $http) {
	$http.get('../services/post/list.php').success(function(data){
		$scope.posts = data;
	});
}

function PostDetailController($scope, $http, $routeParams) {
	$scope.postId = $routeParams.id;

	$http.get('../services/post/detail.php?id=' + $scope.postId).success(function(data){
		$scope.post = data;
	});

	$scope.save = function(){
		var data = {
			id: $scope.post.id,
			title: $scope.post.title,
			content: $scope.post.content
		};

		$http({
			url: '../services/post/udpate.php',
			method: 'POST',
			data: data,
			headers: {'Content-Type' : 'application/data'}
		}).success(function(data){
			$scope.message = data;
		}).error(function(data){
			$scope.errorMessage = data;
		});

	};
}

function PostNewController($scope, $http) {
	$scope.save = function(){
		var data = { 
			title: $scope.post.title,
			content: $scope.post.content
		};

		$http({
			url: '../services/post/save.php',
			method: 'POST',
			data: data,
			headers: {'Content-Type' : 'application/data'} 
		}).success(function(data){
			$scope.message = data;
			$('#success').show();

		}).error(function(data){
			$scope.errorMessage = data;
			$('#error').show();
		});
	};
}

function ApiaryListController($scope, $http) {
	$http.get('../services/apiary/list.php').success(function(data){
		$scope.apiaries = data;
	});
}

function ApiaryDetailController($scope, $http) {
	$scope.apiaryId = $routeParams.id;

	$http.get('../services/apiary/detail.php' + $scope.apiaryId).success(function(data){
		$scope.apiary = data;
	});
}

function BeehiveDetailController($scope, $http) {
	$scope.beehiveId = $routeParams.id;

	$http.get('../services/beehive/detail.php' + $scope.beehiveId).success(function(data){
		$scope.beehive = data;
	});
}
