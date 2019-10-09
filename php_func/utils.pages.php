<?php
function my_header($stylesheet = '../web/css/style.css', $img = '../web/img/freenote-logo.png') {
    echo <<<EOT
<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="utf-8">
    <title>FreeNote</title>
    <link rel="stylesheet" href="{$stylesheet}">
    <script type="text/javascript" src="../js/showmenu.js"></script>
    
</head>
<body>
    <header class="topHeader">
        <div class="headerLeftDiv">
            <img src="{$img}" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImg">
        </div>
        <div class="headerCenterDiv">
        </div>
        <div class="headerRightDiv">
            <a class="sign" onclick="showmenu()"> Connexion </a>
            <a class="sign" onclick="showmenu2()"> Inscription </a>
        </div>
    </header>

EOT;
}

function mainView() {
    echo <<<EOT
<nav class="corps">
        <h2> Les plus récents </h2>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>    </nav>
EOT;

}

function mostLiked(){
    echo <<<EOT
<nav class="corps">
        <h2> Les plus aimés </h2>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
        <article class="topic">
            <span> Tichop </span>
            <p> Salut FreeNote </p>
            <p> Voir plus > </p>
        </article>
    </nav>
EOT;

}

function my_footer() {
    echo <<<EOT
    <footer class="bottomFooter">
    <div class="divfooter">
        <img src = "../web/img/logogithub.png" alt="LogoGitHub" class="logogithub" title="Thomas RIPPOL" >
        <a href="https://github.com/Wowsnake"> Steffen ALVAREZ </a>
        <a href="https://github.com/ThomasRp"> Thomas RIPPOL </a>
        <a href="https://github.com/christophe-ruiz"> Christophe RUIZ </a>
        <a href="https://github.com/AlexisVatin"> Alexis VATIN </a>
    </div>
    
    <div class="divfooter">
           
        <p> Copyright 2019 </p>
        <img src="../web/img/freenote-logo.png" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImgfooter">
    </div>
        
    <div class="divfooter divfooterdroit">
        <a href="#"> <img src="../web/img/help.png" alt="aide" title="Aide" class="help"> </a>
        <a href="#"> <img src="../web/img/flechehaut.png" alt="flecheverslehaut" title="Haut de la page" class="flechehaut"> </a>
    </div>
    
    </footer>
</body>
</html>
EOT;
}
