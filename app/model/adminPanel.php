<?php
    function userList() {
        $myDb = new Database('config/dbCredentials.ini');
        $sql = "SELECT * FROM UTILISATEUR ORDER BY USERNAME";
        $stmt = $myDb->getPDO()->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(); ?>
        <article class="user">
            <span> NOM </span>
            <span> MAIL </span>
            <span> DATE D'INSCRIPTION </span>
        </article>
        <?php
        var_dump($result);
        foreach ($result as $item) { ?>
            <article class="user <? if ($item['IS_ADMIN']) echo 'isAdmin'?>">
                <span> <?php $item['USERNAME'] ?> </span>
                <span> <?php $item['MAIL'] ?> </span>
                <span> <?php $item['DATE_INSCRIPTION'] ?> </span>
            </article>
<?php
        }
    }