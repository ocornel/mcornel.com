<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/favicon_generator.css" media="all"/></head>
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
        	<div class="col-md-6 col-md-offset-3 text-center">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->
    <div class="row">
        	<div class="col-md-6 col-md-offset-3 text-center">
            <div class="well well-sm">
                <p class="info text-center text-danger"></p>
                <form class="form-horizontal favicon_form" enctype="multipart/form-data" action="favicon-generator.php#" method="post">
                    <fieldset>
                        <!-- Select Basic -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="size">Icon Size</label>
                            <div class="col-md-9">
                                <select id="size" name="size" class="form-control">
                                    <option value="16">16px</option>
                                    <option value="24">24px</option>
                                    <option value="32">32px</option>
                                    <option value="48">48px</option>
                                    <option value="64">64px</option>
                                </select>
                            </div>
                        </div>

                        <!-- File Button -->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="icon">Select Image</label>
                            <div class="col-md-9">
                                <input id="icon" name="icon" class="input-file" type="file">
                                <span class="help-block">Please select a JPG, PNG or GIF image. Max file size 2mb.</span>
                            </div>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="create"></label>
                            <div class="col-md-4">
                                <button id="create" name="create" class="btn btn-primary">Create Icon</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
</div>
<div class="footer">© <script>document.write((new Date()).getFullYear().toString());</script> | mcornel.com &#9786;</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="js/favicon_generator.js"></script>
</body>
</html>