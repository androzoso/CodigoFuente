angular
  .module('MyApp', [])
  .controller('FormController', MyController);
  

// The controller code
function MyController($scope, $http) {

	$scope.datos=null;

	$scope.detaills=function(id){
		$http.post('http://localhost/public_html/app/webroot/json/noticia.json', {id:id}).
		success(function(data, status, headers, config) 
		  {
		  		$scope.datos=data.datos;

		  }).
		  error(function(data, status, headers, config) {
	});
	};
}

