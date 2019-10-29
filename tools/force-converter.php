<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/unit_converter.css" media="all"/>
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
                <form class="form-horizontal" action="force-converter.php#" method="post" name="unit_converter">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input data-prop="Force" id="data" name="data" type="text" placeholder="Enter a number" class="form-control input-md">

                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <select id="from" name="from" class="form-control">
                                </select>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <select id="to" name="to" class="form-control">
                                </select>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="out" name="out" type="text" placeholder="" class="form-control input-md" disabled>

                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <button id="convert" name="convert" class="btn btn-success">Convert</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
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
<script src="js/unit_converter.js"></script>
</body>
</html>