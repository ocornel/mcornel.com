

function is_form_ok(name, email, message) {
    valid = true;

    if (command == "") {
        $("p.info_out").html('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;Please enter your command.').addClass("text-danger");
        $("#command").focus().parents("div.form-group").addClass("has-error");
        valid = false;
        return false;
    } else {
        $("p.info_out").html("").removeClass("text-danger");
        $("#command").parents("div.form-group").removeClass("has-error");
    }
    return valid;
}

$(document).ready(function (e) {
    $("#clear").click(function (e) {
        e.preventDefault();
        $("#command").val("");
        $("p.info_out").html("");
        $("#name").parents("div.form-group").removeClass("has-error");
    });

    $("#execute").click(function (e) {
        e.preventDefault();

        command = $.trim($("#command").val());

        if (!is_form_ok(command)) {
            return false;
        }
        $("p.info_out").html('<span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>&nbsp;Please wait while executing your command.').addClass("text-info");
        $("html, body").animate({
            scrollTop: $("p.info_out").offset().top - 10
        }, 500);
        $.ajax({
            type: "POST",
            url: "commands.php",
            data: {
                "command": command,
            },
            success: function (data) {
                json_data = JSON.parse(data);
                output = json_data.output;
                console.log(output);
                $("p.info_out").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>'+output).addClass("text-success");
                $("html, body").animate({
                    scrollTop: $("p.info_out").offset().top - 10
                }, 500);
                $("#command").val("");
                $("#command").parents("div.form-group").removeClass("has-error");

            },
            error: function () {
                $("p.info_out").html('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;Connection lost! Please try again.').addClass("text-danger");
                $("html, body").animate({
                    scrollTop: $("p.info_out").offset().top - 10
                }, 500);
            }
        });
    });
});