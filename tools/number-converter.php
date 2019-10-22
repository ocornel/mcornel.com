<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/number_converter.css" media="all"/>
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
        <div class="col-md-10 col-md-offset-1 text-center">
            <p>Binary / Decimal / Hexadecimal / ASCII Converter converts number systems like Binary to Decimal, Decimal to Hexadecimal, Hexadecimal to Binary, Decimal to Binary, ASCII to Binary and Binary to ASCII. Enter Binary, Decimal, Hexadecimal or ASCII data and select a proper number system and then click Convert to get converted data.</p>
        </div>
    </div>
    <!--    Tool content-->
    <div class="row">
        <div class="col-md-5 col-md-offset-1 text-center">
            <div class="well well-sm">
                <div class="info text-danger"></div>
                <form class="form-horizontal" action="number-converter.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea placeholder="Enter Binary / Decimal / Hexadecimal / Ascii data here" style="height:250px;" class="form-control" id="from" name="from"></textarea>
                            </div>
                        </div>

                        <!-- Select Basic -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <select id="format" name="format" class="form-control">
                                    <option value="bin2dec">Binary to Decimal</option>
                                    <option value="dec2hex">Decimal to Hexadecimal</option>
                                    <option value="hex2bin">Hexadecimal to Binary</option>
                                    <option value="dec2bin">Decimal to Binary</option>
                                    <option value="asc2bin">Ascii to Binary</option>
                                    <option value="bin2asc">Binary to Ascii</option>
                                </select>
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
        <div class="col-md-5 text-center">
            <div class="well well-sm">
                <form class="form-horizontal" action="number-converter.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea placeholder="Your result will be shown here" style="height:250px;" class="form-control" id="to" name="to"></textarea>
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
<div class="footer">© <script>document.write((new Date()).getFullYear().toString());</script> | mcornel.com &#9786;</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="js/number_converter.js"></script>
</body>
</html>