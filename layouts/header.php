<?php
    require_once 'class/User.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FreeNote</title>
    <link rel="stylesheet" href="web/css/style.css">
    <script type="text/javascript" src="js/showmenu.js"></script>
</head>
<body>
<header class="topHeader">
    <?php if(isset($_SESSION['currentUser']) && unserialize($_SESSION['currentUser'])->getAdminStatus()) echo '<span class = "adminStatus"> admin </span>';?>
    <div class="headerLeftDiv">
        <img src="web/img/freenote-logo.png" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImg">
    </div>
    <div class="headerCenterDiv">
    </div>
    <div class="headerRightDiv">
        <a class="sign" onclick="showmenu()"> Connexion </a>
        <a class="sign" onclick="showmenu2()"> Inscription </a>
    </div>
</header>