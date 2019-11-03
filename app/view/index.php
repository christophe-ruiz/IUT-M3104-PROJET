    <div id="divconnexion" style="visibility: hidden">
        <h3> Connexion </h3>
        <form method="POST" id="form" action="../../php/func_connexion.php">
            <label>Nom utilisateur :</label>
            <input <?php if ($_SESSION['invalidUser']) echo 'class="divError"' ?> type="text" name="login">
            <label>Mot de passe :</label>
            <input <?php if ($_SESSION['invalidPWD']) echo 'class="divError"' ?> type="password" name="pwd">
            <a href=""> Mot de passe oublié ? </a>
            <input class="submitSign" type="Submit" name="action" value="connexion">
        </form>
    </div>

    <div id="divinscription" style="visibility: hidden">
        <h3> Inscription </h3>
        <form method="POST" id="form" action="../../php/func_inscription.php">
            <label>Nom utilisateur :</label>
            <input <?php if ($_SESSION['formError']['exists']) echo 'class="divError"' ?> type="text" name="login">
            <label>Mot de passe :</label>
            <input <?php if ($_SESSION['formError']['exists'] || $_SESSION['formError']['pwd']) echo 'class="divError"' ?> type="password" name="pwd">
            <label>Vérification mot de passe :</label>
            <input <?php if ($_SESSION['formError']['exists'] || $_SESSION['formError']['pwd']) echo 'class="divError"' ?> type="password" name="vpwd">
            <label>Mail</label>
            <input <?php if ($_SESSION['formError']['mail']) echo 'class="divError"' ?> type="text" name="mail">
            <input class="submitSign" type="Submit" name="action" value="inscription">
        </form>

    </div>
