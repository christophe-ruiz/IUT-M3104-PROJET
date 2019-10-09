<?php
if (isset($_SESSION['currentUser']))
    echo $_SESSION['currentUser'];
else echo 'pas connecté';
