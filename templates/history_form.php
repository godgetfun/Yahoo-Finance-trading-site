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
<table class="table table-striped">
    <thead>
        <tr>
            <td><strong>Transaction Type</strong></td>
            <td><strong>Date/Time</strong></td>
            <td><strong>Symbol</strong></td>
            <td><strong>Shares</strong></td>
            <td><strong>Price</strong></td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach($hist as $row): ?>
        <?= "<tr>" ?>
            <?= "<td>".$row["transaction"]."</td>" ?>
            <?= "<td>".$row["timestamp"]."</td>" ?>
            <?= "<td>".$row["symbol"]."</td>" ?>
            <?= "<td>".$row["shares"]."</td>" ?>
            <?= "<td>$".number_format($row["price"],2)."</td>" ?>
        <?= "</tr>" ?>
        <?php endforeach ?>
    </tbody>
</table>
