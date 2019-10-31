<?php
    $adminStatus = '';
    if(isset($_SESSION['currentUser']) && unserialize($_SESSION['currentUser'])->getAdminStatus())
        $adminStatus = '<a href="?url=admin" class = "adminStatus"> admin </a>';

    $topRight = <<<EOT
    <div class="headerRightDiv">
            <a class="sign" onclick="showmenu()"> Connexion </a>
            <a class="sign" onclick="showmenu2()"> Inscription </a>
        </div>

EOT;

    $username = unserialize($_SESSION['userUsername']);
    if (isset($_SESSION['currentUser'])) $topRight = <<<EOT
<div class="headerRightDiv">
            <span> {$username} </span>
            <a class="sign" href="php/func_logout.php"> Déconnexion </a>
        </div>

EOT;

