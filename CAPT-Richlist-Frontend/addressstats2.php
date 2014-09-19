<!DOCTYPE html>
<html>
<head>
	<link rel='stylesheet' href='style.css'/>
</head>
<body>
<div id="header">
		<div>
			<div class="logo" align=left>
				<a href="../CAPT-Richlist-Frontend"></a>
			</div>
			
		</div>

</div>
<div class="outerDiv" id="addrstats">  
        <div class="innerDiv">  
			<?php
$remote = file_get_contents('https://api.captcoin.com/address/top/' . $_POST["address"]);

$data = json_decode($remote, true);
echo "<center><p>Address "; echo $data['top']['address']; echo "</p><br/>";
echo "<p>#"; echo $data['top']['rank']; echo " richest address</p><br/>";
echo "<p>"; echo $data['top']['balance']; echo " CAPT</p><br/>";
echo "<p>"; echo $data['top']['percent']; echo "% of all CAPTcoins</p></center>";
?>
</div></div>
</form>
</body>
</html>