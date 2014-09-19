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
for ($i = 600; $i <= 649; $i++) {
    echo "<p>"; echo $i + 1;echo ".  </p> ";echo " <p>"; echo $data['top'][$i]['address']; echo "</p>";
    echo "										";
    echo "<div>"; echo $data['top'][$i]['balance']; echo " CAPT</div>";
    echo "<br>";
}
?>
<div style="margin-left: 45%;margin-right: 45%;">
  <a class="navbuttonsleft" href="richlist.php"><img src="Grey_Prev_Btn.png"></a>
  <a class="navbuttons" href="page3.php"><img src="Grey_Next_Btn.png"></a>
 </div>        </div>  
    </div>  

</body>
</html>