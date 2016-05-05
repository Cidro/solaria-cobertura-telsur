(function(global, angular, $, solaria){
    solaria.controller('CoberturaTelsurModuleController', function($scope, $http, $solariaMessenger){
        $scope.init = function () {
            $scope.config = contents.config;
        }
    });
})(window, angular, jQuery, solaria);