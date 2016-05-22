angular.module("adicionarBolo", ["ngMessages"]);
angular.module("adicionarBolo").controller("adicionarBoloController", function ($scope) {
    $scope.app = "Cadastro de Bolos";
});

angular.module("adicionarFuncionario", ["ngMessages"]);
angular.module("adicionarFuncionario").controller("adicionarFuncionarioController", function ($scope) {
    $scope.app = "Cadastro de Funcionário";
});

angular.module("adicionarUser", ["ngMessages"]);
angular.module("adicionarUser").controller("adicionarUserController", function ($scope) {
    $scope.app = "Registre-se agora!";
});