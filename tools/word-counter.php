<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/word_counter.css" media="all"/></head>
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
                <form class="form-horizontal txt_form" action="word-counter.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea style="height:250px;" class="form-control" id="txt" name="txt"></textarea>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <button id="count" name="count" class="btn btn-success">Count</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <img style="display:none;margin-bottom:20px;" src="img/loader.GIF" alt="loader"/>
            <div class="well well-sm data" style="display:none;"><p><strong>Total&nbsp;words:&nbsp;<span class="words" style="color:#FF0000;">0</span> &nbsp;&nbsp;Total&nbsp;characters:&nbsp;<span class="characters" style="color:#FF0000;">0</span> &nbsp;&nbsp;Total&nbsp;characters&nbsp;(without&nbsp;spaces):&nbsp;<span class="characters_without_spaces" style="color:#FF0000;">0</span> &nbsp;&nbsp;Total&nbsp;lines:&nbsp;<span class="lines" style="color:#FF0000;">0</span> &nbsp;&nbsp;Total&nbsp;spaces:&nbsp;<span class="spaces" style="color:#FF0000;">0</span></strong></p></div>
        </div>
    </div>

    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
</div>
<div class="footer">© <script>document.write((new Date()).getFullYear().toString());</script> | mcornel.com &#9786;</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="js/word_counter.js"></script>
</body>
</html>