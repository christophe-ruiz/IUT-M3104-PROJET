    <div id="divconnexion" style="visibility: hidden">
        <h3> Connexion </h3><br>
        <form method="POST" id="form" action="../../php/func_connexion.php">
            <label>Nom utilisateur :</label><br>
            <input type="text" name="login">
            <br><br>
            <label>Mot de passe :</label><br>
            <input type="password" name="pwd">
            <br><br>
            <a href=""> Mot de passe oublié ? </a>
            <br><br>
            <input class="submitSign" type="Submit" name="action" value="connexion">

        </form>
    </div>

    <div id="divinscription" style="visibility: hidden">
        <h3> Inscription </h3><br>
        <form method="POST" id="form" action="../../php/func_inscription.php">
            <label>Nom utilisateur :</label><br>
            <input type="text" name="login">
            <br><br>
            <label>Mot de passe :</label><br>
            <input type="password" name="pwd">
            <br><br>
            <label>Vérification mot de passe :</label><br>
            <input type="password" name="vpwd">
            <br><br>
            <label>Mail</label><br>
            <input type="text" name="mail">
            <br><br>
            <input class="submitSign" type="Submit" name="action" value="inscription">
        </form>
    </div>
