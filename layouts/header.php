<?php
    require_once 'class/User.php';
    require_once 'app/model/header.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FreeNote</title>
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
                <p class="error"> Le nombre de mots est trop élevé (<?= $_SESSION['too_much_words'] ?>), <br> réessayez avec 2 mots maximum. </p>
            <?php
                unset($_SESSION['too_much_words']);
            } else if($_SESSION['too_few_words']) { ?>
                <p class="error"> Le nombre de mots est trop faible, <br> réessayez avec au moins 1 mot. </p>
            <?php
                unset($_SESSION['too_few_words']);
            } else if($_SESSION['formError']['mail']) { ?>
                <p class="error"> Le format de l'e-mail n'est pas accepté. </p>
            <?php
                unset($_SESSION['formError']['mail']);
            } else if ($_SESSION['formError']['exists']) { ?>
                <p class="error"> Un utilisateur utilise déjà ce nom d'utilisateur ou cet e-mail. </p>
            <?php
                unset($_SESSION['formError']['exists']);
            } else if ($_SESSION['formError']['pwd']) { ?>
                <p class="error"> Les mots de passes ne correspondent pas. </p>
            <?php
                unset($_SESSION['formError']['pwd']);
            } else if ($_SESSION['cantSend']) { ?>
                <p class="error"> Vous devez vous connecter avant d'envoyer un message. </p>
                <?php
                unset($_SESSION['cantSend']);
            } else if ($_SESSION['invalidPWD']) { ?>
                <p class="error"> Mauvais mot de passe. </p>
                <?php
                unset($_SESSION['invalidPWD']);
            }  else if ($_SESSION['invalidUser']) { ?>
                <p class="error"> Cet utilisateur n'existe pas. </p>
                <?php
                unset($_SESSION['invalidUser']);
            }  else if ($_SESSION['updated']) { ?>
                <p class="info"> Valeur mise à jour </p>
                <?php
                unset($_SESSION['updated']);
            }  else if ($_SESSION['alreadyReplied']) { ?>
                <p class="error"> Vous avez déjà répondu à cette discussion </p>
                <?php
                unset($_SESSION['alreadyReplied']);
            }
            ?>
        </div>
        <?= $topRight ?>
    </header>