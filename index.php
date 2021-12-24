<?php

    include("www/db_connect.php");
    include("www/header.php");
        
    if(isset($_GET["k"]))
    {
        $page = $_GET["k"];
        
        if(file_exists($page.".php"))
        {
            include ($page.".php");
        }
        else
        {
            include("www/error.php");
        }
    }
    else
    {
        include("home.php");
    }

    include("www/footer.php");

?>