<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contact Us - Consult mCornel</title>
    <meta name="description" content="If you have a question about a tool or want to give us your feedback, feel free to contact us."/>
    <link rel="stylesheet" type="text/css" href="css/contact_us.css" media="all"/></head>
<?php include('parts/head.php');?>
</head>
<body>
<?php include('parts/header.html'); ?>
<!--PAGE CONTENT-->
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Contact Us</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <p>Let us know if you have any feedback, questions about a tool or a tool request by filling up the form below. We'll try to answer your message as soon as possible.</p>
            <div class="well well-sm">
                <p class="info_out"></p>
                <form class="text-left">
                    <fieldset>

                        <div class="form-group">
                            <label for="name">Your name</label>
                            <input id="name" name="name" type="text" placeholder="" class="form-control input-md">
                        </div>

                        <div class="form-group">
                            <label for="email">Your email</label>
                            <input id="email" name="email" type="text" placeholder="" class="form-control input-md">
                        </div>

                        <div class="form-group">
                            <label for="message">Your message</label>
                            <textarea style="height:250px;" class="form-control" id="message" name="message"></textarea>
                        </div>
                        <div class="form-group">
                            <div class="g-recaptcha" data-sitekey="6Lcg4BMTAAAAAA7IqfBJG_iXGJ-5jl8q2VvU7qTB"></div>
                        </div>
                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button id="send" name="send" class="btn btn-success">Send</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <?php include('parts/tools.php');?>
</div>
<?php include('parts/footer.html') ?>
<script src="https://www.google.com/recaptcha/api.js"></script>
<script src="js/contact_us.js"></script>
</body>
</html>