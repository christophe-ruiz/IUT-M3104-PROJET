    <div id="divconnexion" style="visibility: hidden">
        <h3> Connexion </h3>
        <form method="POST" id="form" action="../../php/func_connexion.php">
            <label>Nom utilisateur :</label>
            <input type="text" name="login">
            <label>Mot de passe :</label>
            <input type="password" name="pwd">
            <a href=""> Mot de passe oublié ? </a>
            <input class="submitSign" type="Submit" name="action" value="connexion">

        </form>
    </div>

    <div id="divinscription" style="visibility: hidden">
        <h3> Inscription </h3>
        <form method="POST" id="form" action="../../php/func_inscription.php">
            <label>Nom utilisateur :</label>
            <input type="text" name="login">
            <label>Mot de passe :</label>
            <input type="password" name="pwd">
            <label>Vérification mot de passe :</label>
            <input type="password" name="vpwd">
            <label>Mail</label>
            <input <?php if ($_SESSION['mailError']) echo 'class="error"' ?> type="text" name="mail">
            <input class="submitSign" type="Submit" name="action" value="inscription">
        </form>

    </div>
