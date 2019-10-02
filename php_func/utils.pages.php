<?php
function my_header() {
    echo <<<EOT
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>FreeNote</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <header class="topHeader">
        <div class="headerLeftDiv">
            <img src="img/freenote-logo.png" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImg">
        </div>
        <div class="headerCenterDiv">
        </div>
        <div class="headerRightDiv">
            <a href="php/main.php"> Connexion </a>
            <a> Inscription </a>
        </div>
    </header>

EOT;
}

function mainView() {
    echo <<<EOT
<nav class="corps">
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

function mostLiked(){
    return;
}

function my_footer() {
    echo <<<EOT
    <footer class="bottomFooter">
        <p> Copyright 2019 </p>
    </footer>
</body>
</html>
EOT;
}
