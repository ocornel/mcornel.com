<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/contact_us.css" media="all"/>
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
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="well well-sm">
                <form class="text-left">
                    <fieldset>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="sample">Select source:&nbsp;</label>
                                    <select id="source" name="source" class="form-control">
                                        <option value="bible" selected>bible</option>
                                        <option value="dict -d gcide">dictionary</option>
                                        <option value="dict -d moby-thesaurus">thesaurus</option>
                                        <option value="reverse-dictionary">reverse dictionary</option>
                                        <option value="reverse-bible">reverse bible</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="name">Lookup term</label>
                                    <input id="term" name="term" type="text" placeholder="Word, verse or phrase..." class="form-control input-md">
                                </div>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button id="lookup" name="lookup" class="btn btn-success">Lookup</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                    <div class="info_out"></div>

                </form>
            </div>
        </div>
    </div>
    <!--        End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
<script src="js/lookup-server.js"></script>
</body>
</html>