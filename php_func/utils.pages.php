<?php
function my_header() {
    echo <<<EOT
<header class="topHeader">
        <div class="headerLeftDiv">
            <img src="img/freenote-logo.png" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImg">
        </div>
        <div class="headerCenterDiv">
        </div>
        <div class="headerRightDiv">
            <a> Connexion </a>
            <a> Inscription </a>
        </div>
    </header>

EOT;
}

function my_footer() {
    echo <<<EOT
    <footer class="bottomFooter">
    <div class="divfooter">
        <img src = "img/logogithub.png" alt="LogoGitHub" class="logogithub" title="Thomas RIPPOL" >
        <a href="https://github.com/Wowsnake"> Steffen ALVAREZ </a>
        <a href="https://github.com/ThomasRp"> Thomas RIPPOL </a>
        <a href="https://github.com/christophe-ruiz"> Christophe RUIZ </a>
        <a href="https://github.com/AlexisVatin"> Alexis VATIN </a>
    </div>
    
    <div class="divfooter">
           
        <p> Copyright 2019 </p>
        <img src="img/freenote-logo.png" alt="Free Note, un forum normaux avec des gens normal :)" class="logoImgfooter">
    </div>
        
    <div class="divfooter divfooterdroit">
        <a href="#"> <img src="img/flechehaut.png" alt="flecheverslehaut" title="Haut de la page" class="flechehaut"> </a>
        <a href="#"> <img src="img/help.png" alt="aide" title="Aide" class="help"> </a>

    </div>
    
    </footer>
EOT;
}
