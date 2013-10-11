<html>
<body>
<?php 

$input = $_POST['email'];
$file = 'mailinglist.txt' or die('Could not read file!');
$contents = file_get_contents($file);
$emails = explode(',', $contents);
$i = 0;
$emailmax = count ($emails);
$isChanged = false;

// loop through email list looking for a match
while ($i <= $emailmax) {
	if ($emails[$i] == $input) {
		unset ($emails[$i]);
		$isChanged = true;
	}
	$i = $i + 1;
}
// close file and reopen in write mode to write updated list
fclose($file);

if ($isChanged) {
	$write = (implode(",",$emails));
	if(strlen($write) == 0) {
		file_put_contents('mailinglist.txt', '');
		echo "Mailing list updated.";	
	}

	else {
echo "<br/>got to here<br/>";
echo strlen($write);

		$file = 'mailinglist.txt';

		$fh = fopen($file, 'w') or die('Could not open file!');

		fwrite($fh, "$write") or die('Could not write to file');
	
		fclose($fh);
		echo "Mailing list updated.";
	}

}
else { echo "Email address not found."; }

?>
</body>
</html>