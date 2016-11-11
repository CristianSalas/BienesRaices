'use strict';
angular.module('apiFrontApp').service("UserService", function ($http, $q) {

    this.users = function () {
        var defered = $q.defer();
        var promise = defered.promise;

        $http({
                method: 'GET',
                url: "http://localhost:8080/BienesRaices/api_back/public/" + "users"
            })
            .success(function (response) {
                defered.resolve(response);
            });

        return promise;
    }
});