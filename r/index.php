<html>
<head>
    <meta charset="UTF-8">
    <title>hrrt</title>
    <link rel="shortcut icon" href="../misc/md-f.ico" />
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" type="text/css" href="styl.css">
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <script src="https://use.fontawesome.com/1960ff61c0.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.0.0/jquery.min.js"></script>
    <script src="../js/main.js"></script>
</head>
<body style="overflow: hidden">
<?php
$html = implode(file('../modules/create-shrrt.php'));
echo $html;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include('../include/functions.php');
// IP OF THE USER
    $ip = $_SERVER['REMOTE_ADDR'];
// URL TO PUT IN Database
    $url = $_POST['url'];
// MAKE SIMPLE URL EG: HTTPS://WWW.GOOGLE.COM -> GOOGLE.COM
    $surl = surl($url);
// RUN SCRIPT
    $full = "http://shrr.tk/". CIURLE($surl, $ip);
    echo $full;
}
?>

</body>
</html>
