<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/image_to_base64_converter.css" media="all"/>
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
                echo ($tool['name'] . $warning) ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="well well-sm">
                <form class="form-horizontal" enctype="multipart/form-data" action="image-to-base64-converter.php#" method="post">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="url">Enter image url</label>
                            <div class="col-md-8">
                                <input id="url" name="url" type="text" placeholder="" class="form-control input-md">

                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="image">Or select an image from computer</label>
                            <div class="col-md-8">
                                <input id="image" name="image" class="input-file" type="file">
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" id="convert" name="convert" class="btn btn-success">Convert</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
<!--    <div class="row">-->
<!--    </div>-->
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<script src="js/image_to_base64_converter.js"></script>

</body>
</html>