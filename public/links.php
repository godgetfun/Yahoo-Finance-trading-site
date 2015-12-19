<?php
    
    // configuration
    require("../includes/config.php");
    #echo $_COOKIE["hsdf"];
    // if the form was submitted
    static $val=0;
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $link = $_POST["links"];
		
		//echo "<h1>$link</h1>";
        redirect("/".$_POST["links"]);
    } 
