<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" type="text/css" href="css/htaccess_secure_directory.css" media="all"/>
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
        <div class="col-md-8 col-md-offset-2 text-center">
            <p class="text-center"><?php echo $tool['user_guide'] ?></p>
        </div>
    </div>
    <!--    Tool content-->
    <div class="row">
        <div class="col-md-8 col-md-offset-2 text-center">
            <div class="well well-sm">
                <form class="form-horizontal">
                    <fieldset>
                        <div class="form-group">
                            <label class="control-label" for="uname"></label>
                            <div class="col-md-12">
                                <input id="uname" name="uname" placeholder="Enter username" class="form-control input-md" type="text">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="pass"></label>
                            <div class="col-md-12">
                                <input id="pass" name="pass" placeholder="Enter password" class="form-control input-md" type="password">

                            </div>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="path"></label>
                            <div class="col-md-12">
                                <input id="path" name="path" placeholder="Path to .htpasswd file" class="form-control input-md" type="text">
                                <span class="help-block">Path to .htpasswd file relative to the root directory of your server (e.g. /home/your_site/protected/.htpasswd)</span>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button id="generate" name="generate" class="btn btn-success">Generate</button>
                                <button id="clear" name="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>

                    </fieldset>
                </form>
            </div>
            <img style="display:none;margin-bottom:15px;" src="img/loader.GIF" alt="loading" class="l_img"/>
            <div class="well well-sm results" style="text-align:left;display:none;">
                <strong>.htpasswd file code:</strong><br/><br/>
                <pre><span id="uname_code"></span>:<span id="crypt_pass"></span></pre><br/>
                <strong>.htaccess file code:</strong><br/><br/>
                <pre>AuthType Basic
AuthName "Password Protected Area"
AuthUserFile <span id="path_to_pass"></span>
Require valid-user</pre>
            </div>
            <div>
                <p>Enter username, password and path to the .htpasswd file. The path should be relative to the root directory of your server. Click generate to generate .htpasswd and .htaccess code. The htaccess secure directory tool will generate code for both .htpasswd and .htaccess files. Create those files and copy paste the code in the files. Then upload the .htaccess file in those directories which you want to protect. Upload the .htpasswd file in a directory as you mentioned in the .htpasswd path input. And finally, visit the directory to check if it is working.</p>
            </div>
        </div>
    </div>
    <!--    End of tool content-->
    <?php include('parts/tools.php'); ?>
</div>
</div>
<div class="footer">© <script>document.write((new Date()).getFullYear().toString());</script> | mcornel.com &#9786;</div>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="js/htaccess_secure_directory.js"></script>
</body>
</html>