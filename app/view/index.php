<?php
    my_header(); ?>


    <div id="divconnexion">
        <h3> Connexion </h3><br>
        <form method="" id="form" action="">
            <label>Nom utilisateur :</label><br>
            <input type="text" name="login">
            <br><br>
            <label>Mot de passe :</label><br>
            <input type="password" name="pwd">
            <br><br>
            <a href=""> Mot de passe oublié ? </a>
            <br><br>
            <input type="Submit" value="Validation">

        </form>
    </div>

    <div id="divinscription">
        <h3> Inscription </h3><br>
        <form method="" id="form" action="">
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
            <input type="Submit" value="Validation">

        </form>
    </div>

<?php
    mainView();
    my_footer();
                    ?>
