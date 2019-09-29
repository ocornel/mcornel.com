<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/diff_viewer.css" media="all"/>
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
        <div class="col-md-12 text-center">
            <div class="well well-sm">
                <form class="form-horizontal url_decoder_form" action="diff-viewer.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea style="height:250px;" class="form-control" id="base_txt" name="base_txt" placeholder="Please enter base text here ..."></textarea>
                            </div>
                        </div>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea style="height:250px;" class="form-control" id="new_txt" name="new_txt" placeholder="Please enter new text here ..."></textarea>
                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="size" name="size" placeholder="Context size (optional)" class="form-control input-md" type="text">

                            </div>
                        </div>

                        <!-- Multiple Radios -->
                        <div class="form-group text-left">
                            <div class="col-md-12">
                                <div class="radio">
                                    <label for="sidebyside">
                                        <input name="radios" id="sidebyside" value="sidebyside" checked="checked" type="radio">
                                        Side by Side Diff
                                    </label>
                                </div>
                                <div class="radio">
                                    <label for="inline">
                                        <input name="radios" id="inline" value="inline" type="radio">
                                        Inline Diff
                                    </label>
                                </div>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <button id="view" name="view" class="btn btn-success">View</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <div id="diff" style="width:100%;text-align:left;margin-bottom:15px;"></div>
        </div>
    </div>
<!--    <div class="row">-->
<!--    </div>-->
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<script src="js/diffview.js"></script>
<script src="js/difflib.js"></script>
<script src="js/diff_viewer.js"></script>
</body>
</html>