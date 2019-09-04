var myApp = angular.module('myModule', [])
    .controller("myController", function ($scope) {
        var employee = {
            'first_name': "Martin",
            'last_name': "Cornel",
            'gender': "Male",
            'ppic': "../images/about_pic.jpg"
        };

        var co_workers = [
            {
                'first_name': 'Herons',
                'last_name': 'Odhiambo',
                'gender': 'Male',
                dob: new Date("November 23, 1992"),
                salary: 50000.765,
                status_text: "I am happy to be here today"
            },
            {
                'first_name': 'Triza',
                'last_name': 'Njeri',
                'gender': 'Female',
                dob: new Date("January 3, 1952"),
                status_text: "Best day of my life!",
                salary: 150000.765
            },
            {
                'first_name': 'Mark',
                'last_name': 'Kariuki',
                'gender': 'Male',
                dob: new Date("December 11, 1994"),
                status_text: "Best day of my life!",
                salary: 50670.765
            },
            {
                'first_name': 'Sharon',
                'last_name': 'Mwangi',
                'gender': 'Female',
                dob: new Date("January 23, 1978"),
                status_text: "Best day of my life!",
                salary: 50000.765
            },
            {
                'first_name': 'Steve',
                'last_name': 'Odhiambo',
                'gender': 'Male',
                dob: new Date("November 23, 1992"),
                status_text: "Best day of my life!",
                salary: 50000.765
            },
            {
                'first_name': 'Juma',
                'last_name': 'Njeri',
                'gender': 'Female',
                dob: new Date("January 3, 1952"),
                status_text: "Best day of my life!",
                salary: 150000.765
            },
            {
                'first_name': 'Kiama',
                'last_name': 'Kariuki',
                'gender': 'Male',
                dob: new Date("December 11, 1994"),
                status_text: "Best day of my life!",
                salary: 50670.765
            },
            {
                'first_name': 'Victor',
                'last_name': 'Mwangi',
                'gender': 'Female',
                dob: new Date("January 23, 1978"),
                status_text: "Best day of my life!",
                salary: 50000.765
            },
            {
                'first_name': 'Douglas',
                'last_name': 'Odhiambo',
                'gender': 'Male',
                dob: new Date("November 23, 1992"),
                status_text: "Best day of my life!",
                salary: 50000.765
            },
            {
                'first_name': 'Ben',
                'last_name': 'Njeri',
                'gender': 'Female',
                dob: new Date("January 3, 1952"),
                status_text: "Best day of my life!",
                salary: 150000.765
            },
            {
                'first_name': 'Kevin',
                'last_name': 'Kariuki',
                'gender': 'Male',
                dob: new Date("December 11, 1994"),
                status_text: "Best day of my life!",
                salary: 50670.765
            },
            {
                'first_name': 'Sharon',
                'last_name': 'Mwangi',
                'gender': 'Female',
                dob: new Date("January 23, 1978"),
                status_text: "Best day of my life!",
                salary: 50000.765
            },
            {
                'first_name': 'Lilian',
                'last_name': 'Odhiambo',
                'gender': 'Male',
                dob: new Date("November 23, 1992"),
                status_text: "Best day of my life!",
                salary: 50000.765
            },
            {
                'first_name': 'Henry',
                'last_name': 'Njeri',
                'gender': 'Female',
                dob: new Date("January 3, 1952"),
                status_text: "Best day of my life!",
                salary: 150000.765
            },
            {
                'first_name': 'James',
                'last_name': 'Kariuki',
                'gender': 'Male',
                dob: new Date("December 11, 1994"),
                status_text: "Best day of my life!",
                salary: 50670.765
            },
            {
                'first_name': 'Evans',
                'last_name': 'Mwangi',
                'gender': 'Female',
                dob: new Date("January 23, 1978"),
                status_text: "Best day of my life!",
                salary: 50000.765
            },
            {
                'first_name': 'Paul',
                'last_name': 'Odhiambo',
                'gender': 'Male',
                dob: new Date("November 23, 1992"),
                status_text: "Let's sing out loud!",
                salary: 50000.765
            },
            {
                'first_name': 'Eugene',
                'last_name': 'Njeri',
                'gender': 'Female',
                dob: new Date("January 3, 1952"),
                status_text: "I write the best python code!",
                salary: 150000.765
            },
            {
                'first_name': 'Hilary',
                'last_name': 'Kariuki',
                'gender': 'Male',
                dob: new Date("December 11, 1994"),
                status_text: "Hey there whatsapp is using me!",
                salary: 50670.765
            },
            {
                'first_name': 'Emmy',
                'last_name': 'Mwangi',
                'gender': 'Female',
                dob: new Date("January 23, 1978"),
                status_text: "Hey there I am using whatsapp!",
                salary: 50000.765
            },
        ];

        var countries = [
            {
                'name': 'Kenya',
                cities: [
                    {name: 'Nairobi'},
                    {name: 'Kisumu'},
                    {name: 'Mombasa'}
                ]
            },
            {
                name: 'Uganda',
                cities: [
                    {name: 'Kambala'},
                    {name: 'Gulu'},
                    {name: 'Lira'}
                ]
            },
            {
                'name': 'Kenya',
                cities: [
                    {name: 'Arusha'},
                    {name: 'Dodoma'},
                ]
            },
        ];

        var technologies = [
            {name: "C#", likes: 0, dislikes: 0},
            {name: "Java", likes: 0, dislikes: 0},
            {name: "Python", likes: 0, dislikes: 0},
            {name: "PHP", likes: 0, dislikes: 0},
            {name: "AngularJS", likes: 0, dislikes: 0},
        ];


        $scope.message = "AngularJS Tutorial";
        $scope.user = employee;
        $scope.input_data = "Hello Angular";
        $scope.co_workers = co_workers;
        $scope.countries = countries;
        $scope.technologies = technologies;

        $scope.like = function (technology) {
            technology.likes++;
        };
        $scope.dislike = function (technology) {
            technology.dislikes++;
        };

        $scope.row_limit = 10;
        $scope.sortColumn = 'first_name';
        $scope.reverseSort = false;

        $scope.sortData = function (column) {
            $scope.reverseSort = ($scope.sortColumn === column) ? !$scope.reverseSort : false;
            $scope.sortColumn = column;
        };

        $scope.getSortClass = function (column) {
            if ($scope.sortColumn === column) {
                return $scope.reverseSort ? 'arrow-down' : 'arrow-up';
            }
            // remove the arrow if this is not a sorted column
            return '';
        };

        // search with multiple columns
        $scope.search = function (item) {
            if ($scope.search2 === undefined) {
                // if you haven't typed anything into the search, display every element (return true)
                return true;
            }

            return item.first_name.toLowerCase().indexOf($scope.search2.toLowerCase()) !== -1 ||             // toLowerCase() prevent case sensitivity
                item.status_text.toLowerCase().indexOf($scope.search2.toLowerCase()) !== -1;

        }



    })
    // custom filter on same file as module and controller
    .filter('man_woman', function () {
        return function (gender) {
            switch (gender) {
                case 'Male':
                    return 'Man';

                case 'Female':
                    return 'Woman';
                default:
                    return 'Unknown';

            }
        }
    })
;
