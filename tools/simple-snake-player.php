<!DOCTYPE html>
<html lang="en">
<head>
<!--    <link rel="stylesheet" type="text/css" href="css/contact_us.css" media="all"/>-->
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
                <div id="popup" style="display: none; height: 625px; width: 625px; color: green; background: #00000099; z-index: 10; position: absolute">
                    <span id="close" onclick="ByID('popup').style.display='none'; document.addEventListener('keydown', keyPush);">close</span><br>
                    You have a new high score!
                    <!--    todo put add container here-->
                </div>
                <canvas id="gc" height="625" width="625"></canvas>
                <span id="score">0</span>/ <span id="highest">0</span>
                <script>
                    function ByID(id) {
                        return document.getElementById(id);
                    }

                    window.onload = function () {
                        canv = ByID('gc');
                        ctx = canv.getContext("2d");
                        document.addEventListener("keydown", keyPush);
                        setInterval(game, 1000 / 10);
                    };
                    px = py = 10;
                    gs = tc = 25;
                    ax = ay = 15;
                    xv = yv = 0;
                    trail = [];
                    tail = 5;

                    function game() {
                        px += xv;
                        py += yv;
                        if (px < 0) {
                            px = tc - 1;
                        }
                        if (px > tc - 1) {
                            px = 0;
                        }
                        if (py < 0) {
                            py = tc - 1;
                        }
                        if (py > tc - 1) {
                            py = 0;
                        }
                        ctx.fillStyle = "black";
                        ctx.fillRect(0, 0, canv.width, canv.height);

                        ctx.fillStyle = "lime";
                        for (var i = 0; i < trail.length; i++) {

                            ctx.fillRect(trail[i].x * gs, trail[i].y * gs, gs - 2, gs - 2,);
                            if (trail[i].x === px && trail[i].y === py) {
                                if (score===highest && tail >5) {
                                    popup();
                                }
                                tail = 5;
                                reset_score();
                            }
                        }
                        trail.push({x: px, y: py});
                        while (trail.length > tail) {
                            trail.shift();
                        }
                        if (px === ax && py === ay) {
                            tail++;
                            ax = Math.floor(Math.random() * tc);
                            ay = Math.floor(Math.random() * tc);
                            increment_score();

                        }
                        ctx.fillStyle = "red";
                        ctx.fillRect(ax * gs, ay * gs, gs - 2, gs - 2,);

                    }

                    score = ByID('score').innerText;
                    highest = ByID('highest').innerText;
                    function increment_score() {
                        score++;
                        ByID('score').innerText = score;
                        if (score > highest) {
                            highest = score;
                            ByID('highest').innerText = highest;
                        }

                    }

                    function popup() {
                        ByID('popup').style.display = 'block';
                        document.removeEventListener("keydown", keyPush);
                    }

                    function reset_score() {
                        score = 0;
                        ByID('score').innerText = score;
                    }


                    function keyPush(evt) {
                        switch (evt.keyCode) {
                            case 37:
                                xv = -1;
                                yv = 0;
                                break;
                            case 38:
                                xv = 0;
                                yv = -1;
                                break;
                            case 39:
                                xv = 1;
                                yv = 0;
                                break;
                            case 40:
                                xv = 0;
                                yv = 1;
                                break;
                        }
                    }
                </script>
            </div>
        </div>
    </div>
    <!--        End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
<?php include('parts/footer.html') ?>
<!--<script src="https://www.google.com/recaptcha/api.js"></script>-->
<!--<script src="js/contact_us.js"></script>-->
</body>
</html>