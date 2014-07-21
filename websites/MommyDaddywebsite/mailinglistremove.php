<html><?php
include($_SERVER["DOCUMENT_ROOT"] . "/header.php");
?>
<head>
<title>Mommy Daddy Website Mailing List</title>
</head>
<body bgcolor="20B2AA">
<br/>
<A HREF="index.php"><img src="logo.png" height="120" width="160"></A>
<br/>
<br/>
<?php 

$input = $_POST['email'];
$file = 'mailinglist.txt';

$contents = file_get_contents($file) or die('Could not read file!');

$emails = explode(',', $contents);
$i = 0;
$emailmax = count ($emails);
$isChanged = false;

// loop through email list looking for a match
while ($i < $emailmax) {
	if ($emails[$i] == $input) {
		unset ($emails[$i]);
		$isChanged = true;
	}
	$i = $i + 1;
}

// close file and reopen in write mode to write updated list
//fclose($file);

if ($isChanged) {
	$write = (implode(",",$emails));
	if(strlen($write) == 0) {
		file_put_contents('mailinglist.txt', '');
		echo "Mailing list updated.";	
	}

	else {

		$file = 'mailinglist.txt';

		$fh = fopen($file, 'w') or die('Could not open file to write!');

		fwrite($fh, "$write") or die('Could not write to file');
	
		fclose($fh);
		echo "Mailing list updated.";
	}

}
else { echo "Email address not found."; }

?>
</body>
</html>
