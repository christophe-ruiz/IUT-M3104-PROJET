<?php
    if ($_POST['like'] == 'like') {
        $myDb = new Database('config/dbCredentials.ini');
        $id = $_GET['id'];
        $login = unserialize($_SESSION['userUsername']);

        $sql = "SELECT * FROM LIKES WHERE ID=$id AND USERNAME='$login'";
        $stmt = $myDb->getPdo()->prepare($sql);
        $stmt->execute();
        $result = $stmt->rowCount();

        if ($result == 0) {
            $url = $_GET['url'];
            $sql = "INSERT INTO LIKES VALUES ($id, '$login')";
            $stmt = $myDb->getPdo()->prepare($sql);
            $stmt->execute();
        }
        else {
            $url = $_GET['url'];
            $sql = "DELETE FROM LIKES WHERE ID=$id  AND USERNAME='$login'";
            $stmt = $myDb->getPdo()->prepare($sql);
            $stmt->execute();
        }
        unset($_POST['like']);
    }
?>
<p class="likeCount"> <?= likeCount($_GET['id']) ?> </p>
