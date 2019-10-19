<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/ip_location_finder.css" media="all"/>
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
        <div class="col-md-6 col-md-offset-3 text-center">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center">
            <div class="well well-sm">
                <p class="info text-danger"></p>
                <form id="location_finder" class="form-horizontal" action="ip-location-finder.php#" method="post">
                    <fieldset>

                        <!-- Textarea -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="url" name="url" placeholder="Enter an IP address" class="form-control" type="text" value="41.80.187.141">
                            </div>
                        </div>

                        <!-- Button (Double) -->
                        <div class="form-group">
                            <div class="col-md-12">
                                <button id="check" name="check" class="btn btn-success">Check</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <table class="table table-hover table-bordered table-striped table-condensed text-left">
                <tbody><tr><td class="properties">Location</td><td class="site_data">Kenya</td></tr><tr><td class="properties">Status</td><td class="site_data">206</td></tr><tr><td class="properties">Country</td><td class="site_data"><img src="img/flags/ke.png"/> Kenya (KE)</td></tr><tr><td class="properties">Latitude</td><td class="site_data">1</td></tr><tr><td class="properties">Longitude</td><td class="site_data">38</td></tr><tr><td class="properties">Currency code</td><td class="site_data">KES</td></tr><tr><td class="properties">Currency rate</td><td class="site_data">1.00 USD = 101.801 KES</td></tr></tbody>
            </table>
            <div class="well well-sm">
                <div style="width:100%;height:400px;" id="map">

                </div>
            </div>
        </div>
    </div>
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
</div>
<div class="footer">© <script>document.write((new Date()).getFullYear().toString());</script> | mcornel.com &#9786;</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js"></script>
<script src="js/ip_location_finder.js"></script>
<script>
    function initialize() {
        var mapCanvas = document.getElementById("map");
        var position = new google.maps.LatLng(1, 38);
        var mapOptions = {
            center: position,
            zoom: 5,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions);
        var marker = new google.maps.Marker({
            map: map,
            position: position,
            title: "41.80.187.141"
        });
    }
    google.maps.event.addDomListener(window, "load", initialize);</script>
</body>
</html>