<?php
    require_once 'php_func/utils.pages.php';
    my_header(); ?>


    <div id="divconnexion">
        <h3> Connexion </h3><br>
        <form method="" id="form" action="">
            <label>Nom utilisateur :</label><br>
            <input type="text" name="username">
            <br><br>
            <label>Mot de passe :</label><br>
            <input type="password" name="password">
            <br><br>
            <a href=""> Mot de passe oublié ? </a>
            <br><br>
            <input type="Submit" value="Validation">

        </form>
    </div>

<?php
    mainView();
    my_footer();
                    ?>