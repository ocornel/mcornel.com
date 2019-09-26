<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/html_encoder.css" media="all"/>
    <?php include('parts/head.php'); ?>
</head>
<body>
<?php include('parts/header.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1><?php $warning = "";
                if ($tool['complete'] != 1) {
                    $warning = " <i class='fa fa-exclamation-triangle text-warning' title='Still in development.'></i> ";
                }
                echo($tool['name'] . $warning) ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->
    <div class="well well-sm">
        <form class="form-horizontal html_encoder_form" action="html-encoder.php#" method="post">
            <fieldset>

                <!-- Textarea -->
                <div class="form-group">
                    <div class="col-md-12">
                        <textarea style="height:250px;" class="form-control" id="encode_html"
                                  name="encode_html"></textarea>
                    </div>
                </div>

                <!-- Button (Double) -->
                <div class="form-group">
                    <div class="col-md-12">
                        <button id="encode" name="encode" class="btn btn-success">Encode</button>
                        <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                    </div>
                </div>

            </fieldset>
        </form>
    </div>
    <!--    <div class="row">-->
    <!--    </div>-->
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<script src="js/html_encoder.js"></script>
</body>
</html>