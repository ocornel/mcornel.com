<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/css_beautifier.css" media="all"/>
    <?php include('parts/head.php'); ?>
</head>
<body>
<?php include('parts/header.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1><?php echo $tool['name'] ?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->
    Sorry you are lost
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<script src="js/jquery-ui.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/FileSaver.min.js"></script>
<script src="js/zclip/jquery.zclip.min.js"></script>
<script src="js/ace/src-min-noconflict/ace.js"></script>
<script src="js/ace/src-min-noconflict/ext-language_tools.js"></script>
<script src="js/ace/src-min-noconflict/ext-themelist.js"></script>
<script src="js/vkbeautify.min.js"></script>
<script src="js/cssbeautify.min.js"></script>
<script src="js/css_beautifier.js"></script>
</body>
</html>