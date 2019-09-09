myApp.factory('stringServices', function () {
    // factory is used to define services in an app. Services return js objects with functions
    return {
        addSpaces: function (input) {
            if (!input) {
                return input;
            }
            var output = "";
            for (var i = 0; i < input.length; i++) {
                if (i > 0 && input[i] === input[i].toUpperCase()) {
                    output += " ";
                }
                output += input[i];
            }
            return output;
        }
    };
});
