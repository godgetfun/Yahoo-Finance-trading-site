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
<form action="quote.php" method="post">
    <fieldset>
        <div class="form-group">
            <input autofocus class="form-control" name="symbol" placeholder="Symbol" type="text"/>
        </div>
        <div class="form-group">
             <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </fieldset>
</form>
