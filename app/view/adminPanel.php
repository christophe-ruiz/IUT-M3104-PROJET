<div class="title">
    <h1> Settings </h1>
</div>
<?php $settings = parse_ini_file('config/rules.ini',TRUE);  ?>
<nav class="setting">
    <span> Messages maximum par discussion </span>
    <input type=text placeholder="<?= $settings['Topic']['max_messages'] ?>">
</nav>
<div class="title">
    <h1> Utilisateurs </h1>
</div>
<nav class="list">
    <?php userList() ?>
</nav>
