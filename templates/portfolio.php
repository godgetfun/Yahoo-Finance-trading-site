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
<table class="table table-striped table-hover" >

    <thead>
        <tr>
            <td><strong>Symbol</strong></td>
            <td><strong>Name</strong></td>
            <td><strong>Shares</strong></td>
            <td><strong>Price</strong></td>
            <td><strong>Total</strong></td>
        </tr>
    </thead>
    
    <tbody>
        <?php foreach ($positions as $position): ?>
    
        <?= "<tr>" ?>
            <?= "<td>".$position["symbol"]."</td>" ?>
            <?= "<td>".$position["name"]."</td>" ?>
            <?= "<td>".$position["shares"]."</td>" ?>
            <?= "<td>"."$".$position["price"]."</td>" ?>
            <?= "<td>"."$".number_format($position["cash"],2)."</td>" ?>
        <?= "</tr>" ?>
        
        <?php endforeach ?>
		<tr><td></td></tr>
        <tr class="danger">
            <td colspan="4" ><strong>CASH</strong></td>
            <td><strong><?= "$".number_format($_SESSION["balance"],2) ?> </strong></td>
        
        </tr>
    </tbody>
</table>
