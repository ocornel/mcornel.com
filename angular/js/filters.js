 // Filters in an external file
myApp.filter('full_name', function () {
    return function (employee) {
        return employee.first_name + ' ' + employee.last_name;
    }
});