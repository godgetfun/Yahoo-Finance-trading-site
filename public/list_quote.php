<?php
    
  // require configuration
  require("../includes/config.php");
  
  // query for cash
 // $_COOKIE["hsdf"]=0;
 // echo $_COOKIE["hsdf"];
  //$_COOKIE.destroy();
  $cash  = query("SELECT cash from users WHERE id=?",$_SESSION["id"]);
  
  // query for history table.
  $hist = query("SELECT * from quotes2 limit 10");
  
  // using render function to display the content via history_form.php
  
  render("quotation.php", ["title" => "Quotes", "cash" => $cash, "hist" => $hist]);
    
?>

