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
$remote = file_get_contents('https://api.captcoin.com/address/top/1000');

$data = json_decode($remote, true);
for ($i = 250; $i <= 299; $i++) {
    echo "<p>"; echo $i + 1;echo ".  </p> ";echo " <p>"; echo $data['top'][$i]['address']; echo "</p>";
    echo "										";
    echo "<div>"; echo $data['top'][$i]['balance']; echo " CAPT</div>";
    echo "<br>";
}
?>
<a class="navbuttonsleft" href="page5.php"><img src="Grey_Prev_Btn.png"></a><a class="navbuttons" href="page7.php"><img src="Grey_Next_Btn.png"></a>
        </div>  
    </div>  

</body>
</html>