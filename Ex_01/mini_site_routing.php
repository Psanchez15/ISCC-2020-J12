<html>
    <head>
<title> Mini site routing </title>

<div class=navigation>
    <a class="nav-link active" href="?page=1#">Accueil</a>
    <a class="nav-link" href="?page=2#">page1</a>
    <a class="nav-link" href="?page=3#">page2</a>
    <a class="nav_link" href="?page=connexion.php">Connexion</a>
    
</div>


<h1> 
    
    <?php 
    if (isset($_GET["page"])){
        if ($_GET["page"]==1){
            echo "Accueil!";
        }
        elseif ($_GET["page"]==2){
            echo "Page 1!";
        }
        elseif ($_GET["page"]==3){
            echo "Page 2!";
        }
        elseif ($_GET["page"]=="connexion.php"){
            echo "Connexion";
            include ("connexion.php");
        }

    }
    
    ?>
</h1>
<?php
var_dump($_SESSION);
    if (isset($_SESSION["id"])){
        echo "loging :";
        echo $_SESSION["id"];
    }
    else{
        if(isset($_COOKIE["id"])){
            $_SESSION["id"]=$_COOKIE["id"];
        }
        else {
            var_dump($_SESSION,$_COOKIE);
        }    
    }
?>
</head>

</html>