<html>
<body>
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