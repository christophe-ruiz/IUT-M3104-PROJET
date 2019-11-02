<?php
    require_once 'class/User.php';
    require_once 'app/model/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FreeNote</title>
    <!-- <link rel="stylesheet" href="web/css/style.css">-->
    <link rel="stylesheet" href="web/css/largestyle.css" type="text/css" />
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script type="text/javascript" src="js/showmenu.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
</head>
<body>
    <header class="topHeader">
        <?= $adminStatus ?>
        <div class="headerLeftDiv">
            <a href="../index.php" class="logoImg"><img src="web/img/freenote-logo.png" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImg"></a>
        </div>
        <div class="headerCenterDiv">
            <?php if ($_SESSION['limitReached']) {?>
                <p class="error" > La limite de messages pour ce topic a été atteinte. </p>
            <?php unset($_SESSION['limitReached']);
            } else if ($_SESSION['too_much_words']) {?>
                <p class="error"> Le nombre de mots est trop élevé, <br> réessayez avec 2 mots maximum. </p>
            <?php
                unset($_SESSION['too_much_words']);
            } else if($_SESSION['too_few_words']) { ?>
                <p class="error"> Le nombre de mots est trop faible, <br> réessayez avec au moins 1 mot. </p>
            <?php
                unset($_SESSION['too_few_words']);
            }
            ?>
        </div>
        <?= $topRight ?>
    </header>