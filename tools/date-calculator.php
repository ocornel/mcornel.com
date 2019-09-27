<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/date_calculator.css" media="all"/>
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
                <form class="form-horizontal" action="date-calculator.php#" method="post">
                    <fieldset>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="sday">Start Date</label>
                            <div class="col-md-3">
                                <input id="sday" name="sday" type="text" placeholder="DD" class="form-control input-md text-center">

                            </div>
                            <div class="col-md-3">
                                <input id="smonth" name="smonth" type="text" placeholder="MM" class="form-control input-md text-center">

                            </div>
                            <div class="col-md-3">
                                <input id="syear" name="syear" type="text" placeholder="YYYY" class="form-control input-md text-center">

                            </div>
                        </div>

                        <!-- Text input-->
                        <div class="form-group">
                            <label class="col-md-3 control-label" for="eday">End Date</label>
                            <div class="col-md-3">
                                <input id="eday" name="eday" type="text" placeholder="DD" class="form-control input-md text-center">

                            </div>
                            <div class="col-md-3">
                                <input id="emonth" name="emonth" type="text" placeholder="MM" class="form-control input-md text-center">

                            </div>
                            <div class="col-md-3">
                                <input id="eyear" name="eyear" type="text" placeholder="YYYY" class="form-control input-md text-center">

                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <button id="calculate" name="calculate" class="btn btn-success">Calculate</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="well well-sm data_out" style="display:none;">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <h2 style="margin:0px;">Your result</h2><p style="color:#FFF;background-color:#000;margin:10px 0px;padding:5px;font-size:18px;" class="img-rounded date_str"></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-7">
                        <p><strong>From Date : </strong><span class="fdate"></span></p><p><strong>To Date, But not Include : </strong><span class="tdate"></span></p>
                    </div>
                    <div class="col-md-5">
                        <h3 style="margin:0px;">Alternative time units:</h3>
                        <ul style="list-style:circle;">
                            <li><span class="tyears"></span> <strong>Years</strong></li>
                            <li><span class="tmonths"></span> <strong>Months</strong></li>
                            <li><span class="tdays"></span> <strong>Days</strong></li>
                            <li><span class="tweeks"></span> <strong>Weeks(Approx)</strong></li>
                            <li><span class="thours"></span> <strong>Hours</strong></li>
                            <li><span class="tminutes"></span> <strong>Minutes</strong></li>
                            <li><span class="tseconds"></span> <strong>Seconds</strong></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <p style="display:none;color:#FFF;background-color:#CA0000;margin:10px 0px;padding:5px;font-size:16px;" class="img-rounded date_war">Important : The Start date was after the End date, so the Start and End fields were SWAPPED.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<script src="js/date_calculator.js"></script>

</body>
</html>