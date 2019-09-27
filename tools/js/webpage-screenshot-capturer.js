function get_output_file_name_from_url(url) {
	// todo generate a filename from the url
	return "output.png";
}

function get_agent_string_from_device_choice(device) {
	// todo get the various device agent strings
	return "Mozilla/5.0 (Windows NT 6.1) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.56 Safari/536.5"
}

function capture_shot(url, width=1200, height=800, agent=null) {
	var system = require('system');

// Web Address (URL) of the page to capture
// 	var url  = url;

// File name of the captured image
	var file = get_output_file_name_from_url(url);

	var page = require('webpage').create();

// Browser size - height and width in pixels
// Change the viewport to 480x320 to emulate the iPhone
	page.viewportSize = { width: width, height : height };

// Set the User Agent String
// You can change it to iPad or Android for mobile screenshots
	agent = get_agent_string_from_device_choice('desktop_chrome');
	if (agent === null) {
		agent = 'desktop_chrome'
	}

	console.log(agent);
	page.settings.userAgent = get_agent_string_from_device_choice(agent);

// Render the screenshot image
	page.open ( url, function ( status ) {
		if ( status !== "success") {
			let error_message = "Could not open web page: " + url;
			console.log(error_message);
			phantom.exit();
		} else {
			window.setTimeout ( function() {
				page.render(file);
				console.log("Download the screenshot : " + file);
				phantom.exit();
			}, 1000);
		}
	});
}


$(document).ready(function(e) {
	$("#clear").click(function(e) {
		e.preventDefault();
		$("#base64_string").val("");
		$("#base64_string").parents("div.form-group").removeClass("has-error");
	});

	$("#convert").click(function(e) {
		e.preventDefault();

		url = $.trim($("#base64_string").val());

		if(url == "")
		{
			$("#base64_string").focus().parents("div.form-group").addClass("has-error");
			return false;
		}else
		{
			$("#base64_string").parents("div.form-group").removeClass("has-error");
		}

		capture_shot(url);

		// if(url.substring(0, 4) != "data"){
		// 	url = "data:image/png;base64," + url;
		// }
		// $("#download_img").prop("src", url);
		// $("#download").prop("href", url);
		// $("div.data_out").show();
	});
});