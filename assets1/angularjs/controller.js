

// var Compulse = angular.module("Compulse",[])
// Compulse.controller("MainController",function($scope){

// });

var Compulse = angular.module('Compulse', ['Compulse.controllers', 'Compulse.services'])
Compulse.controller('MainController', function($scope,$q) {

    // $scope.passwordPattern = /(?=^.{5,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/;

    // $scope.validEmail = function(email) {

    //     var deferred = $q.defer(); 
    //     setTimeout(function() {
    //         deferred.resolve([ "nitin.sarma@gmail.com", "nitin@gmail.com" ].indexOf(email) === -1);
    //     }, 1000);
    //     return deferred.promise;
    // };

});

    Compulse.directive("ngEquals", function() {
        var directive = { };

        directive.restrict = 'A';
        directive.require = 'ngModel';
        directive.scope = {
            original: '=ngEquals'
        };

        directive.link = function(scope, elm, attrs, ngModel) {
            ngModel.$parsers.unshift(function(value) {
                ngModel.$setValidity('equals', scope.original === value);
                return value;
            });
        };

        return directive;
    });

    // .directive("ngFiltered", function() {
    //         var directive = { };

    //         directive.restrict = 'A';
    //         directive.require = 'ngModel';
    //         directive.scope = {
    //             filter: '&ngFiltered'
    //         };

    //         directive.link = function(scope, elm, attrs, ngModel) {
    //             ngModel.$parsers.unshift(function(value) {
    //                 var result = scope.filter({
    //                     $value: value
    //                 });
    //                 if (typeof result.then === "function") {
    //                     result.then(function(result) {
    //                         ngModel.$setValidity('filtered', result);
    //                     });
    //                 } else {
    //                     ngModel.$setValidity('filtered', result);
    //                 }
    //                 return value;
    //             });
    //         };

    //         return directive;
    //     });



