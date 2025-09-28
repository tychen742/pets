<html>
<greeting>
    <?php

    if ($_SESSION['userid_notes'] != NULL) {
        $userid_notes = $_SESSION['userid_notes'];
        $username_notes = $_SESSION['username_notes'];
        echo "Welcome, " . $username_notes . "!" . " <a href='member/logout.php' style='color:darkgray'> &nbsp exit</a>";
    } else {
        echo "You are not logged in.";
    }
    ?>
</greeting>
</html>