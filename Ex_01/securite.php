<?php
session_start();
?>
<html>
    <p>
    <?php
    if (isset($_POST['username'])){
        echo 'toto';
        if ($_POST['username']=="SELECT `Login` FROM `utilisateurs` WHERE 'admin'"){
            $_SESSION["id"]=$_POST['user_login'];
            var_dump($_SESSION,$_COOKIE);
            setcookie("id",$_COOKIE["id"]);
            //header ('C:\Users\Sanchez\Documents\Iseg\ISCC-2020\ISCC-2020\Jour-01\ISCC-2020-J09\Ex_01\connexion.php');
            exit ();
        }
        else {
            echo "Sorry it is not the good password/user name. Try again";
        }
    }
    ?>
    </p>
    </html>