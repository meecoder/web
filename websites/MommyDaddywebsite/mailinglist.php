<html><?php
include($_SERVER["DOCUMENT_ROOT"] . "/header.php");
?>
<body bgcolor="20B2AA">
<A HREF="index.html"><img src="logo.png" height="120" width="160"></A>
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
