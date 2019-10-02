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
        <p> Copyright 2019 </p>
    </footer>
EOT;
}
