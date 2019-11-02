<div class="title">
    <h1> Settings </h1>
</div>
<?php $settings = parse_ini_file('config/rules.ini',TRUE);  ?>
<nav class="setting">
    <form>
        <label class="settingName" for="maxmsg"> Messages maximum par discussion </label>
        <input class="settingParam" name="maxmsg" type=text placeholder="<?= $settings['Topic']['max_messages'] ?>">


        <input type="submit" value="Appliquer">
    </form>
</nav>
<div class="title">
    <h1> Utilisateurs </h1>
</div>
<nav class="list">
    <?php userList() ?>
</nav>
