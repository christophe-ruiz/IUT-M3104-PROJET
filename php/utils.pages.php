<?php
function my_header() {
    echo <<<EOT
    <header class="topHeader">
        <a> Connexion </a>
        <a> Inscription </a>
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
