

function is_form_ok(source, term) {
    valid = true;

    if (source == "") {
        $("div.info_out").html('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;Please select the source.').addClass("text-danger");
        $("#source").focus().parents("div.form-group").addClass("has-error");
        valid = false;
        return false;
    } else {
        $("div.info_out").html("").removeClass("text-danger");
        $("#source").parents("div.form-group").removeClass("has-error");
    }

    if (term == "") {
        $("div.info_out").html('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;Please enter a lookup term.').addClass("text-danger");
        $("#term").focus().parents("div.form-group").addClass("has-error");
        valid = false;
        return false;
    } else {
        $("div.info_out").html("").removeClass("text-danger");
        $("#term").parents("div.form-group").removeClass("has-error");
    }
    return valid;
}

$(document).ready(function (e) {
    $("#clear").click(function (e) {
        e.preventDefault();
        $("#term").val("");
        $("div.info_out").html("");
        $("#term").parents("div.form-group").removeClass("has-error");
    });

    $("#lookup").click(function (e) {
        e.preventDefault();

        source = $.trim($("#source").val());
        term = $.trim($("#term").val());

        if (!is_form_ok(source, term)) {
            return false;
        }
        $("div.info_out").html('<span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>&nbsp;Please wait while looking up your term.').addClass("text-info");
        $("html, body").animate({
            scrollTop: $("div.info_out").offset().top - 10
        }, 500);
        $.ajax({
            type: "POST",
            url: "commands.php",
            data: {
                "source": source,
                "term": term,
            },
            success: function (data) {
                // console.log(data);
                json_data = JSON.parse(data);
                output = json_data.output;
                output = output.replace("\n", "<br/>");
                console.log(output);
                if (output !== "") {
                    $("div.info_out").html('<pre class="glyphicon glyphicon-ok" aria-hidden="true"></pre>'+output).addClass("text-success");
                    $("html, body").animate({
                        scrollTop: $("div.info_out").offset().top - 10
                    }, 500);
                }
                else {
                        $("div.info_out").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span> No results found.').addClass("text-success");
                    $("html, body").animate({
                        scrollTop: $("div.info_out").offset().top - 10
                    }, 500);

                }
                // $("#term").val("");
                $("#term").parents("div.form-group").removeClass("has-error");

            },
            error: function () {
                $("div.info_out").html('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;Connection lost! Please try again.').addClass("text-danger");
                $("html, body").animate({
                    scrollTop: $("div.info_out").offset().top - 10
                }, 500);
            }
        });
    });
});