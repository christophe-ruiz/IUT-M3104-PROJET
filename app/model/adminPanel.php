<?php
    function userList() {
        $myDb = new Database('config/dbCredentials.ini');
        $sql = "SELECT * FROM UTILISATEUR ORDER BY USERNAME";
        $stmt = $myDb->getPDO()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); ?>
        <article class="user">
            <span class="type"> NOM </span>
            <span class="type"> MAIL </span>
            <span class="type"> DATE D'INSCRIPTION </span>
        </article>
        <?php
        foreach ($result as $item) { ?>
            <article class="user <? if ($item['IS_ADMIN']) echo 'isAdmin'?>">
                <span> <?= $item['USERNAME'] ?> </span>
                <span> <?= $item['MAIL'] ?> </span>
                <span> <?= $item['DATE_INSCRIPTION'] ?> </span>
            </article>
<?php
        }
    }