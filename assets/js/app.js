
// app.js
// criar angular app
var validationApp = angular.module('validationApp', []);

// criar angular controller
validationApp.controller('mainController', function($scope) {

    // função para enviar o formulário depois que a validação estiver ok           
    $scope.submitForm = function(isValid) {

        // verifica se o formulário é válido
        if (isValid) {
            
        }

    };

});