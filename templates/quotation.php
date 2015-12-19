
<form name="links" action="links.php" method=post>
    <fieldset> 
        <div class="form-group">
            Links: <SELECT autofocus class="form-control" name="links">
            <option value=''>------</option>
            <option value="index.php">Home</option>
            <option value="buy.php">Buy</option>
            <option value="sell.php">Sell</option>
            <option value="history.php">History</option>
            <option value="quote.php">Quote</option>
            <option value="passwd.php">Change Password</option>
			<option value="list_quote.php">List Quotes</option>
            <option value="logout.php">Logout</option>
                          
            </SELECT>
            <input class="form-control" type="Submit" value="Go"/>
        </div>
    </fieldset>
</form>
<script>
var x=10;
function loadXMLDoc(){
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("POST","list_quote2.php?q="+x,true);
xmlhttp.send();
x+=10;
}
function loadXMLDoc2(){
var xmlhttp;
if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
    {
    document.getElementById("myDiv").innerHTML=xmlhttp.responseText;
    }
  }
xmlhttp.open("GET","list_quote2.php?q="+x,true);
xmlhttp.send();
x-=10;
if(x<0)
	x=0;
}
</script>

<div id="myDiv">
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
</div>

<input class="form-control" type="Submit" value="Previous" onclick="loadXMLDoc2()"/>
<input class="form-control" type="Submit" value="Next" onclick="loadXMLDoc()"/>

