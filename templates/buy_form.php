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
            <option value="logout.php">Logout</option>
                          
            </SELECT>
            <input class="form-control" type="Submit" value="Go"/>
        </div>
    </fieldset>
</form>

<script>
function showHintQ(str) {
	echo "yes";
    if (str.length == 0) { 
        document.getElementById("txtHint").innerHTML = "";
        return;
    } else {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open("GET", "gethint.php?q=" + str, true);
        xmlhttp.send();
    }
}
</script>

<form name="sell" action="buy.php" method=post>   

    <fieldset>
		
        <div class="form-group">
            <input autofocus class="form-control" type="text" name="symbol" placeholder="Symbol" onkeyup="showHint(this.value)"/>
			
        </div>
		
        <div class="form-group">
            <input autofocus class="form-control" type="int" name="shares" placeholder="Quantity"/>
        </div>
        <div class="control-group">
            <input class="form-control" type="Submit" value="BUY"/>
        </div>
		<div class="form-group">
		<br><br><br>
		<strong><p>Suggestions:</p> <span id="txtHint"></span></strong>
		</div>
    </fieldset>
</form>

