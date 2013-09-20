angular.module('management-system', []).
	config(['$routeProvider', function ($routeProvider) {
		$routeProvider
			.when('/contact', {templateUrl: 'templates/contact/list.html', controller: ContactListController})
			.when('/contact/:id', {templateUrl: 'templates/contact/detail.html', controller: ContactDetailController })
			.when('/post', {templateUrl: 'templates/post/list.html', controller: PostListController})
			.when('/post/edit/:id', {templateUrl: 'templates/post/detail.html', controller: PostDetailController})
			.when('/post/new', {templateUrl: 'templates/post/new.html', controller: PostNewController})
			.when('/apiary', {templateUrl: 'templates/apiary/list.html', controller: ApiaryListController})
			.when('/apiary/:id', {templateUrl: 'templates/apiary/detail.html', controller: ApiaryDetailController})
			.when('/beehive/:id', {templateUrl: 'templates/beehive/detail.html', controller: BeehiveDetailController})
			.otherwise({redirectTo: '/contact'});
	}]);

angular.module('management-system').directive('ckEditor', function() {
  return {
    require: '?ngModel',
    link: function(scope, elm, attr, ngModel) {
	      var ck = CKEDITOR.replace(elm[0]);
		
	      if (!ngModel) return;
		      
	      ck.on('pasteState', function() {
	            scope.$apply(function() {
		            ngModel.$setViewValue(ck.getData());
		    });
	      });
							    
	      ngModel.$render = function(value) {
	          ck.setData(ngModel.$viewValue);
	      };
   	   }
	};
});

