<html ng-app ng-controller="MyBlogListController">
	<head>
		<title ng-bind-template="My Angular Blog: {{query}}">My Angular blog</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		
		<!-- Bootstrap -->
		<link href="./includes/css/bootstrap.min.css" rel="stylesheet">
		<link href="./includes/css/bootstrap-responsive.min.css" rel="stylesheet">
		<link href="./includes/css/base.css" rel="stylesheet">
		<link href="./includes/css/ui-lightness/jquery-ui-1.10.3.custom.min.css" rel="stylesheet">
	</head>
	<body ng-init="RetrieveAll()">
		<script type="text/javascript" src="./includes/js/angular.min.js"></script>

		<script type="text/javascript" src="./includes/js/angular/blog-controller.js"></script>

		<style type="text/css">
			.blog-title {
				margin-top: 100px;
				text-align: center;
				font-size: 72px;
			}
			
			.post-repeater {
				list-style-type: none;
				text-align: center;
			}

			.post-item {
				list-style-type: none;
			}
		</style>
		<div class="container-fluid">
			<div class="row-fluid">
				<div class=span2>
					Search: <input ng-model="query"/>
					Sort By:
					<select ng-model="orderProp">
						<option value="title">Alphabetical</option>
						<option value="date">Date</option>
					</select>
					<div id="status">Current Filter: {{query}}</div>	
				</div>
				
				<div class="span10">
					<h1 class="blog-title">My blog page</h1>
					
					<ul class="post-repeater">
						<li class="post-item" ng-repeat="post in posts | filter:query | orderBy:orderProp">
							<article>
								<h2>{{post.title}}</h2>
								<div class="post-content">
									{{post.content}}
								</div>
								<p class="post-footer">Ecrit le {{post.date}} par {{post.user_id}}</p>
								<p class="post-comments"><a href="./admin/post/{{post.id}}">Commentaires</a></p>
							</article>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</body>
</html>
