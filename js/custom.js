var myAppModule = angular.module('reservation', ['ngCookies']);


/*myAppModule.factory('LoginService',['$scope','$cookies', function($scope,$cookies) {
 var factory = {};

 factory.isLoggedIn = function() {
 if(!angular.isUndefined($cookies.getObject('logged_user'))){
 return (" " +$cookies.getObject('logged_user').first_name);
 }else{
 console.log("inside service");
 //$scope.display_name = false;
 return false;
 }
 };

 return factory;
 }]);*/

myAppModule.controller('loginController',['$scope','$cookies', function ($scope,$cookies) {

    $scope.invalidLogin = false;
    $scope.openRegistration = function() {
        $('#loginModal').modal('hide');
        $('#registerModal').modal('show');
    }

    $scope.checkUser = function() {

        if(!angular.isUndefined($cookies.getObject('registered_users'))){
            angular.forEach($cookies.getObject('registered_users'),function(value,index){
                //console.log(value.email + "==" + $scope.user.email);
                if((value.email == $scope.user.email) && (value.password == $scope.user.password)){

                    $scope.login_object = {
                        first_name: value.first_name,
                        last_name: value.last_name,
                        email: value.email
                    };

                    $cookies.putObject("logged_user",$scope.login_object)
                    window.location = 'index.php';
                }else{
                    $scope.login_warning = 'Username & password do not match!'
                    $scope.invalidLogin = true;
                }
            });
            //console.log("invalid");
        }
    };

    $scope.isLoggedIn = function() {

        if(!angular.isUndefined($cookies.getObject('logged_user'))){

            $scope.display_name = " " +$cookies.getObject('logged_user').first_name;
        }else{
            console.log("inside");
            $scope.display_name = false;
        }
    }

    $scope.openLoginModal = function() {
        $('#loginModal').modal('show');
    }

    $scope.logOut = function() {
        $cookies.remove("logged_user");
        window.location = 'index.php';
    }
}]);

myAppModule.controller('registerController',['$scope','$cookies', function ($scope,$cookies) {

//            $scope.users = [];
//
//            $scope.entry = {
//                first_name: 'deep',
//                last_name: 'gandhi',
//                email: 'abc@def.com',
//                password : 'sadada'
//            };
//
//
//            $scope.reg_users = $cookies.getObject("registered_users");
//            console.log($scope.reg_users);



    $scope.registerUser = function () {

        $scope.users = [];

        $scope.entry = {
            first_name: $scope.user.first_name,
            last_name: $scope.user.last_name,
            email: $scope.user.email,
            password : $scope.user.password
        };

        if(angular.isUndefined($cookies.getObject('registered_users'))){
            console.log("undefined");
            $scope.users.push($scope.entry);
            $cookies.putObject('registered_users',$scope.users);
        }else{
            $scope.reg_users = $cookies.getObject("registered_users");

            var valid = true;
            angular.forEach($scope.reg_users,function(value,index){
                //console.log(value.email);
                if(value.email == $scope.user.email){
                    valid = false;
                }
            })

            if(valid) {
                $scope.reg_users.push($scope.entry);
                $cookies.putObject('registered_users',$scope.reg_users);
                $('#registerModal').modal('hide');
                window.location = 'index.php';
            }else{
                alert("Email Address already taken! Please choose another one");
            }
            console.log($scope.reg_users);
        }
    };
}]);


myAppModule.controller('reservation',['$scope','$cookies', function ($scope,$cookies) {

    $scope.saveReservation = function() {

        if (!angular.isUndefined($cookies.getObject('logged_user'))) {

            $scope.tables = [];

            $scope.table_entry = {
                reservation_id: Math.floor((Math.random() * 10000) + 1),
                reservation_date: $scope.input_date,
                reservation_time: $scope.input_time,
                reservation_person: $scope.input_person,
                reservation_hotel: $scope.input_restaurant,
                reservation_contact : $scope.input_contact
            };

            if (angular.isUndefined($cookies.getObject('tables'))) {
                $scope.tables.push($scope.table_entry);
                $cookies.putObject('tables', $scope.tables);
            } else {
                $scope.total_tables = $cookies.getObject("tables");
                $scope.total_tables.push($scope.table_entry);
                $cookies.putObject('tables', $scope.total_tables);
            }

            var n = noty({
                text        : '<i class="fa fa-danger"></i> Reservation added successfully!',
                type        : 'success',
                dismissQueue: true,
                layout      : 'top',
                theme       : 'defaultTheme',
                timeout     : 3000
            });

            $scope.resFrom.$setPristine();

        }else{
            var n = noty({
                text        : '<i class="fa fa-warning"></i> Please Login to save your table',
                type        : 'danger',
                dismissQueue: true,
                layout      : 'top',
                theme       : 'defaultTheme',
                timeout     : 3000
            });
        }
    }
}]);


myAppModule.controller('viewReservation',['$scope','$cookies', function ($scope,$cookies) {

    $scope.getReservation = function() {

        console.log("Dada");
        if (!angular.isUndefined($cookies.getObject('logged_user'))) {

            $scope.total_tables = $cookies.getObject("tables");


        }else{
            window.location = 'index.php';
        }
    }
}]);
