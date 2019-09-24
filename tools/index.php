<!DOCTYPE html>
<html lang="en">
<head>
    <?php include('parts/head.php');?>
</head>
<body>
<?php include('parts/header.php'); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1><?php echo $tool['name']?></h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <p class="text-center"><?php echo $tool['user_guide']?></p>
        </div>
<!--        Tool content-->

<!--        End of tool content-->
    </div>
    <?php include('parts/tools.php');?>
</div>
<?php include('parts/footer.html') ?>
<script src="js/home.js"></script>
</body>
</html>