<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/lorem_ipsum_generator.css" media="all"/>
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
        <div class="col-md-4">
            <div class="well well-sm">
                <div class="info text-danger text-center"></div>
                <form>
                    <fieldset>
                        <div class="form-group">
                            <label for="items_type">Items to generate</label>
                            <select id="items_type" name="items_type" class="form-control">
                                <option value="words">Words</option>
                                <option value="sentences">Sentences</option>
                                <option value="paragraphs" selected>Paragraphs</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="markup">Include HTML markup</label>
                            <select id="markup" name="markup" class="form-control">
                                <option value="html">Yes</option>
                                <option value="plain">No</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="items">How many items to generate</label>
                            <input id="items" name="items" type="text" placeholder="" class="form-control input-md" value="5">
                        </div>
                        <div class="form-group">
                            <label for="min_words">Minimum words per sentence</label>
                            <input id="min_words" name="min_words" type="text" placeholder="" class="form-control input-md" value="5">
                        </div>
                        <div class="form-group">
                            <label for="max_words">Maximum words per sentence</label>
                            <input id="max_words" name="max_words" type="text" placeholder="" class="form-control input-md" value="10">
                        </div>
                        <div class="form-group">
                            <label for="min_sentences">Minimum sentences per paragraph</label>                              <input id="min_sentences" name="min_sentences" type="text" placeholder="" class="form-control input-md" value="3">
                        </div>
                        <div class="form-group">
                            <label for="max_sentences">Maximum sentences per paragraph</label>                              <input id="max_sentences" name="max_sentences" type="text" placeholder="" class="form-control input-md" value="5">
                        </div>
                        <div class="form-group text-center">
                            <button id="generate" name="generate" class="btn btn-primary">Generate</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        <div class="col-md-8">
            <div class="well well-sm">
                <textarea placeholder="Your result will be shown here" style="height:567px;" class="form-control" id="out" name="out"></textarea>
            </div>
        </div>
    </div>
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
</div>
<div class="footer">© <script>document.write((new Date()).getFullYear().toString());</script> | mcornel.com &#9786;</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="js/lorem-ipsum.min.js"></script>
<script src="js/lorem_ipsum_generator.js"></script>

</body>
</html>