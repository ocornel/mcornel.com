 // Filters in an external file
myApp.filter('full_name', function () {
    return function (employee) {
        return employee.first_name + ' ' + employee.last_name;
    }
})
    .filter('my_date_filter', function () {
     return function (date_string) {

         // Split timestamp into [ Y, M, D, h, m, s ]
         var t = date_string.split(/[- :]/);
         // console.log(t);

// Apply each element to the Date function
         var d = new Date(Date.UTC(t[0], t[1]-1, t[2], t[3], t[4], t[5]));
//
//          console.log(d);
// -> Wed Jun 09 2010 14:12:01 GMT+0100 (BST)
         // d = "Hello";
         return d;
     }
 })
;