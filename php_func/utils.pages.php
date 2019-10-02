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
    <div>
        <img src = "img/logogithub.png" alt="LogoGitHub" class="logogithub" title="Thomas RIPPOL" >
        <a href="https://github.com/Wowsnake"> Steffen ALVAREZ </a>
        <a href="https://github.com/ThomasRp"> Thomas RIPPOL </a>
        <a href="https://github.com/christophe-ruiz"> Christophe RUIZ </a>
        <a href="https://github.com/AlexisVatin"> Alexis VATIN </a>
    </div>
    
    <div>
           
        <p> Copyright 2019 </p>

    </div>
        
    <div>
            
    </div>
    
    </footer>
EOT;
}
