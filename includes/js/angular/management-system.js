angular.module('management-system', []).
	config(['$routeProvider', function ($routeProvider) {
		$routeProvider
			.when('/contact', {templateUrl: 'templates/contact/list.html', controller: ContactListController})
			.when('/contact/:id', {templateUrl: 'templates/contact/detail.html', controller: ContactDetailController })
			.when('/news', {templateUrl: 'templates/admin/news/list.html', controller: NewsListController})
			.when('/news/:id', {templateUrl: 'templates/admin/news/detail.html', controller: NewsDetailController})
			.when('/apiary', {templateUrl: 'templates/admin/apiary/list.html', controller: ApiaryListController})
			.when('/apiary/:id', {templateUrl: 'templates/admin/apiary/detail.html', controller: ApiaryDetailController})
			.when('/beehive/:id', {templateUrl: 'templates/admin/beehive/detail.html', controller: BeehiveDetailController})
			.otherwise({redirectTo: '/contact'});
	}]);
