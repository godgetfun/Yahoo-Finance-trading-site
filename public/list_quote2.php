<?php
    
  // require configuration
  require("../includes/config.php");
  
  //echo $_COOKIE["val"];
  // query for cash
  $cash  = query("SELECT cash from users WHERE id=?",$_SESSION["id"]);
  $val=$_REQUEST["q"];
  //echo $val;
  // query for history table.
  $hist = query("SELECT * from quotes2 limit $val,10");
  // using render function to display the content via history_form.php
  
  //render("quotation.php", ["title" => "Quotes", "cash" => $cash, "hist" => $hist]);
    
?>
<table class="table table-striped table-hover">
    <thead>
        <tr>
            <td><strong>Company Name</strong></td>
            <td><strong>Symbol</strong></td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($hist as $row): ?>
        <?= "<tr>" ?>
            <?= "<td>".$row["company_name"]."</td>" ?>
            <?= "<td>".$row["symbol"]."</td>" ?>
        <?= "</tr>" ?>
        <?php endforeach ?>
    </tbody>
	
</table>