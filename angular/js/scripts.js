var myApp = angular.module('myModule',[])
    .controller("myController", function ($scope) {
        var employee = {
            'first_name': "Martin",
            'last_name': "Cornel",
            'gender': "Male",
            'ppic': "../images/about_pic.jpg"
        };

        var co_workers = [
            {'first_name': 'Herons', 'last_name': 'Odhiambo', 'gender': 'Male'},
            {'first_name': 'Triza', 'last_name': 'Njeri', 'gender': 'Female'},
            {'first_name': 'Mark', 'last_name': 'Kariuki', 'gender': 'Male'},
            {'first_name': 'Sharon', 'last_name': 'Mwangi', 'gender': 'Female'},
        ];

        var countries = [
            {'name': 'Kenya',
                cities: [
                    {name: 'Nairobi'},
                    {name: 'Kisumu'},
                    {name: 'Mombasa'}
                ]
            },
            {name: 'Uganda',
                cities: [
                    {name: 'Kambala'},
                    {name: 'Gulu'},
                    {name: 'Lira'}
                ]
            },
            {'name': 'Kenya',
                cities: [
                    {name: 'Arusha'},
                    {name: 'Dodoma'},
                ]
            },
        ];

        $scope.message = "AngularJS Tutorial";
        $scope.user = employee;
        $scope.input_data = "Hello Angular";
        $scope.co_workers = co_workers;
        $scope.countries = countries;
    });
