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
<div class="outerDiv">  
        <div class="innerDiv" align=left>  
			<?php
$remote = file_get_contents('https://api.captcoin.com/address/top/stats');

$data = json_decode($remote, true);
echo "<div style='margin-left: 25%;margin-right: 25%;'><center><p>";
echo $data['seen_addresses'];
echo " total addresses used in network</p><br/><p>";
echo $data['balance_addresses'];
echo " total addresses that currently have coins</p><br/><p>";
echo $data['total_coins'];
echo " CAPT -- total CAPTcoins in network<br/></p><br/><br/><p>";
echo $data['wealth_distribution'][0]['total_coins'];
echo " CAPT -- total coins in top 10 addresses</p><br/><p>";
echo $data['wealth_distribution'][0]['percent'];
echo "% -- percent of all coins in top 10 addresses<br/></p><br/><br/><p>";
echo $data['wealth_distribution'][1]['total_coins'];
echo " CAPT -- total coins in top 100 addresses</p><br/><p>";
echo $data['wealth_distribution'][1]['percent'];
echo "% -- percent of all coins in top 100 addresses<br/></p><br/><br/><p>";
echo $data['wealth_distribution'][2]['total_coins'];
echo " CAPT -- total coins in top 1,000 addresses</p><br/><p>";
echo $data['wealth_distribution'][2]['percent'];
echo "% -- percent of all coins in top 1,000 addresses<br/></p><br/><br/><p>";
echo $data['wealth_distribution'][3]['total_coins'];
echo " CAPT -- total coins in top 10,000 addresses</p><br/><p>";
echo $data['wealth_distribution'][3]['percent'];
echo "% -- percent of all coins in top 10,000 addresses<br/></p><br/><br/><p>";
echo $data['average'];
echo " CAPT -- average CAPTcoins per address</p><br/><p></center></div>";
?>
        </div>  
    </div>  

</body>
</html>