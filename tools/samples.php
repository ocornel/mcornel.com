<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/samples.css" media="all"/>
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
    <!--        Tool content-->
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-inline text-center" style="margin:10px;">
                    <fieldset>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <label for="sample">Select a sample to get sample data:&nbsp;</label>
                            <select id="sample" name="sample" class="form-control">
                                <option value="css" selected>css</option>
                                <option value="csv">csv</option>
                                <option value="html">html</option>
                                <option value="javascript">javascript</option>
                                <option value="json">json</option>
                                <option value="opml">opml</option>
                                <option value="php">php</option>
                                <option value="sql">sql</option>
                                <option value="xml">xml</option>
                                <option value="yaml">yaml</option>
                                <option value="less">less</option>
                                <option value="rss">rss</option>
                                <option value="sass">sass</option>
                                <option value="scss">scss</option>
                                <option value="stylus">stylus</option>
                            </select>
                        </div>

                        <!-- Button -->
                        <div class="form-group">
                            <div class="col-md-4">
                                <button id="copy" name="copy" class="btn btn-info">Copy&nbsp;data</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
                <div id="code1"></div>
            </div>
        </div>
    </div>
    <!--        End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
<script src="js/samples.js"></script>
</body>
</html>