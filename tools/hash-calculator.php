<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/hash_calculator.css" media="all"/>
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
                <form class="form-horizontal" action="hash-calculator.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea style="height:250px;" class="form-control" id="data" name="data"></textarea>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <select id="format" name="format" class="form-control">
                                    <option value="">select algorithm</option><option value="md2">md2</option><option value="md4">md4</option><option value="md5">md5</option><option value="sha1">sha1</option><option value="sha224">sha224</option><option value="sha256">sha256</option><option value="sha384">sha384</option><option value="sha512">sha512</option><option value="ripemd128">ripemd128</option><option value="ripemd160">ripemd160</option><option value="ripemd256">ripemd256</option><option value="ripemd320">ripemd320</option><option value="whirlpool">whirlpool</option><option value="tiger128,3">tiger128,3</option><option value="tiger160,3">tiger160,3</option><option value="tiger192,3">tiger192,3</option><option value="tiger128,4">tiger128,4</option><option value="tiger160,4">tiger160,4</option><option value="tiger192,4">tiger192,4</option><option value="snefru">snefru</option><option value="snefru256">snefru256</option><option value="gost">gost</option><option value="gost-crypto">gost-crypto</option><option value="adler32">adler32</option><option value="crc32">crc32</option><option value="crc32b">crc32b</option><option value="fnv132">fnv132</option><option value="fnv1a32">fnv1a32</option><option value="fnv164">fnv164</option><option value="fnv1a64">fnv1a64</option><option value="joaat">joaat</option><option value="haval128,3">haval128,3</option><option value="haval160,3">haval160,3</option><option value="haval192,3">haval192,3</option><option value="haval224,3">haval224,3</option><option value="haval256,3">haval256,3</option><option value="haval128,4">haval128,4</option><option value="haval160,4">haval160,4</option><option value="haval192,4">haval192,4</option><option value="haval224,4">haval224,4</option><option value="haval256,4">haval256,4</option><option value="haval128,5">haval128,5</option><option value="haval160,5">haval160,5</option><option value="haval192,5">haval192,5</option><option value="haval224,5">haval224,5</option><option value="haval256,5">haval256,5</option>                            </select>
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <button id="calculate_hash" name="calculate_hash" class="btn btn-success">Calculate&nbsp;Hash</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">

            <img style="display:none;margin-bottom:20px;" src="img/loader.GIF" alt="loader"/>
            <div class="well well-sm out_div" style="display:none;">
                <form class="form-horizontal" action="hash-calculator.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea style="height:250px;" class="form-control" id="out" name="out"></textarea>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div></div>
<div class="footer">© <script>document.write((new Date()).getFullYear().toString());</script> | mcornel.com &#9786;</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="js/hash_calculator.js"></script>
</body>
</html>