<?php
    require_once 'class/User.php';
    require_once 'app/model/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FreeNote</title>
    <link rel="stylesheet" href="web/css/style.css">
    <link rel="stylesheet" media="screen and (min-width: 1100px)" href="web/css/largestyle.css" type="text/css" />
    <script type="text/javascript" src="js/showmenu.js"></script>

</head>
<body>
    <header class="topHeader">
        <?= $adminStatus ?>
        <div class="headerLeftDiv">
            <img src="web/img/freenote-logo.png" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImg"></a>
        </div>
        <div class="headerCenterDiv"> </div>
        <?= $topRight ?>
    </header>