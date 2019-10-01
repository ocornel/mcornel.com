<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-148595578-1"></script>
<script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-148595578-1');
</script>

<!--adds-->
<!--<script data-ad-client="ca-pub-8078706526441664" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>-->


<?php
$connection = new mysqli("localhost", "angular_user", "angular_password", "angular_practice") or die(mysqli_error());
$url = basename($_SERVER['REQUEST_URI']);
$tool = mysqli_fetch_assoc($connection->query("SELECT * FROM `tools` WHERE url='$url'"));

//increment tool requests
$requests = $tool['load_requests'];
$requests++;
$id = $tool['id'];
$connection->query("UPDATE `tools` SET `load_requests` = '$requests' WHERE id = $id");
?>

<title><?php echo $tool['title']?></title>
<meta name="description" content="<?php echo $tool['description']?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<link rel="shortcut icon" href="../images/mcornel-logo.png"/>

<!--<link rel="stylesheet" href="../css/bootstrap.min.css">-->
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="../css/fontawesome-all.min.css">
<!--<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" media="all"/>-->
<link rel="stylesheet" type="text/css" href="css/jquery-ui.min.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css" media="all"/>
<link rel="stylesheet" type="text/css" href="css/styles.css" media="all"/>
