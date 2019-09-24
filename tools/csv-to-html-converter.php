<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/csv_to_html_converter.css" media="all"/></head>
    <?php include('parts/head.php'); ?>
</head>
<body>
<?php include('parts/header.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1><?php echo $tool['name'] ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->

    <div class="row">
        <div class="col-md-12 text-center">
            <div class="well well-sm data_tb text-left" style="overflow:auto;display:none;"></div>
        </div>
    </div>    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>

<script src="js/js-beautify/js/lib/beautify-css.js"></script>
<script src="js/js-beautify/js/lib/beautify-html.js"></script>
<script src="js/csv_to_html_converter.js"></script>
</body>
</html>