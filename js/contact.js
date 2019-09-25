function is_email_valid(email) {
    regx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{1,}))$/;
    valid_mail = regx.test(email);
    if (valid_mail) {
        return true;
    } else {
        return false;
    }
}

function is_form_ok(name, email, message, subject) {
    valid = true;

    if (name == "") {
        $("p.info_out").html('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;Please enter your name.').addClass("text-danger");
        $("#name").focus().parents("div.form-group").addClass("has-error");
        valid = false;
        return false;
    } else {
        $("p.info_out").html("").removeClass("text-danger");
        $("#name").parents("div.form-group").removeClass("has-error");
    }

    if (!is_email_valid(email)) {
        $("p.info_out").html('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;Please enter a valid email address.').addClass("text-danger");
        $("#email").focus().parents("div.form-group").addClass("has-error");
        valid = false;
        return false;
    } else {
        $("p.info_out").html("").removeClass("text-danger");
        $("#email").parents("div.form-group").removeClass("has-error");
    }

    if (subject == "") {
        $("p.info_out").html('<span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>&nbsp;Please enter your message.').addClass("text-danger");
        $("#subject").focus().parents("div.form-group").addClass("has-error");
        valid = false;
        return false;
    } else {
        $("p.info_out").html("").removeClass("text-danger");
        $("#subject").parents("div.form-group").removeClass("has-error");
    }
    return valid;
}

$(document).ready(function (e) {
    $("#clear").click(function (e) {
        e.preventDefault();
        $("#name,#email,#message,#phone,#subject").val("");
        $("p.info_out").html("");
        $("#name,#email,#message,#phone,#subject").parents("div.form-group").removeClass("has-error");
    });

    $("#send").click(function (e) {
        e.preventDefault();

        name = $.trim($("#name").val());
        email = $.trim($("#email").val());
        message = $.trim($("#message").val());
        phone = $.trim($("#phone").val());
        subject = $.trim($("#subject").val());

        if (!is_form_ok(name, email, message, subject)) {
            return false;
        }
        $("p.info_out").html('<span class="glyphicon glyphicon-hourglass" aria-hidden="true"></span>&nbsp;Please wait while sending your message.').addClass("text-info");
        $("html, body").animate({
            scrollTop: $("p.info_out").offset().top - 10
        }, 500);
        $.ajax({
            type: "POST",
            url: "contact.php",
            data: {
                "name": name,
                "email": email,
                "message": message,
                "subject": subject,
                "phone": phone,
            },
            success: function (data) {
                console.log(data);
                $("p.info_out").html('<span class="glyphicon glyphicon-ok" aria-hidden="true"></span>&nbsp;Your message has been sent.').addClass("text-success");
                $("html, body").animate({
                    scrollTop: $("p.info_out").offset().top - 10
                }, 500);
                $("#name,#email,#message,#phone,#subject").val("");
                $("#name,#email,#message,#phone,#subject").parents("div.form-group").removeClass("has-error");
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
