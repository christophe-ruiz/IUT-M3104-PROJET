<div class="title">
    <h1> Settings </h1>
</div>
<?php
    session_start();
    $settings = parse_ini_file('config/rules.ini',TRUE);
?>
<nav class="setting">
    <form method="post" action="">
        <label class="settingName" for="maxmsg"> Messages maximum par discussion </label>
        <input class="settingParam" name="maxmsg" type=text placeholder="<?= $settings['Topic']['max_messages'] ?>">
        <input type="submit" name="update" value="Appliquer">
    </form>
</nav>
<div class="title">
    <h1> Utilisateurs </h1>
</div>
<nav class="list">
    <?php userList() ?>
</nav>

<?php
    function config_set($config_file, $section, $key, $value) {
        $config_data = parse_ini_file($config_file, true);
        $config_data[$section][$key] = $value;
        $new_content = '';
        foreach ($config_data as $section => $section_content) {
            $section_content = array_map(function($value, $key) {
                return "$key=$value";
            }, array_values($section_content), array_keys($section_content));
            $section_content = implode("\n", $section_content);
            $new_content .= "[$section]\n$section_content\n";
        }
        file_put_contents($config_file, $new_content);
    }

    if (isset($_POST['update'])) {
        $_SESSION ['updated'] = TRUE;
        var_dump($_SESSION);
        config_set('config/rules.ini', 'Topic', 'max_messages', $_POST['maxmsg']);
    }
