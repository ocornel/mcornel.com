 // Filters in an external file
myApp.filter('full_name', function () {
    return function (employee) {
        return employee.first_name + ' ' + employee.last_name;
    }
})
    .filter('my_date_filter', function () {
     return function (date_string) {
         // Split timestamp into [ Y, M, D, h, m, s ]
         let timestamp = date_string.split(/[- :]/);
         // Apply each element to the Date function
         return new Date(Date.UTC(timestamp[0], timestamp[1] - 1, timestamp[2], timestamp[3], timestamp[4], timestamp[5]));
     }
 })
;