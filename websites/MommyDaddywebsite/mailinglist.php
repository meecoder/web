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

if (filter_var($input, FILTER_VALIDATE_EMAIL)) {

	// set file to write
	$file = 'mailinglist.txt';

	// open file
	$fh = fopen($file, 'a') or die('Could not open file!');

	// write to file
	fwrite($fh, ",$input") or die('Could not write to file');

	// close file
	fclose($fh);

	echo "You should now be on our mailing list";

} else {
	echo "Email invalid.";
}

?>


</body>
</html>
