function ContactListController($scope, $http, $templateCache) {
	$scope.orderProp = 'date';

	var method = "GET";
	var url = "../services/contact/load_list.php";

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

function ContactDetailController($scope, $routeParams) {
	$scope.messageId = $routeParams.id;
}

function NewsListController() {
}

function NewsDetailController() {
}

function ApiaryListController() {
}

function ApiaryDetailController() {
}

function BeehiveDetailController() {
}
