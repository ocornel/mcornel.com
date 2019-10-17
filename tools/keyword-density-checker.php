<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/keyword_density_checker.css" media="all"/></head>
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
        	<div class="col-md-8 col-md-offset-2 text-center">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->
    <div class="row">
        	<div class="col-md-8 col-md-offset-2 text-center">
                <div class="well well-sm">
                    <p class="info text-danger"></p>
                    <form class="form-horizontal" action="keyword-density-checker.php#" method="post">
                        <fieldset>

                            <!-- Textarea -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <input id="url" name="url" placeholder="Enter page url" class="form-control" type="text">
                                </div>
                            </div>

                            <!-- Button (Double) -->
                            <div class="form-group">
                                <div class="col-md-12">
                                    <button id="check" name="check" class="btn btn-success">Check</button>
                                    <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                                </div>
                            </div>

                        </fieldset>
                    </form>
                </div>
                <img style="display:none;margin-bottom:20px;" src="img/loader.GIF" alt="loader"/>
                <table class="table table-hover text-left info_tb" style="display:none;">
                    <thead>
                    <tr>
                        <th>Page url</th>
                        <th>Total words</th>
                        <th>Total keywords</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
                <table class="table table-hover text-left density_tb" style="display:none;">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Keyword</th>
                        <th>Density</th>
                        <th>Count</th>
                    </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
        </div>
    </div>
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
</div>
<div class="footer">© <script>document.write((new Date()).getFullYear().toString());</script> | mcornel.com &#9786;</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="js/keyword_density_checker.js"></script>
</body>
</html>