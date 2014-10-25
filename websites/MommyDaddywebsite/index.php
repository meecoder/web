<html><head>
<link rel=stylesheet href="style.css" type="text/css">
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/header.php");
?><title>Mommy Daddy Website</title></head><body bgcolor="20B2AA"><h1>Welcome to the Mommy Daddy Website!</h1>
<a href="aboutus.php">About Us</a>
<h4>Join our mailing list!</h4>
<form action="" method="post">
Insert your email address: <input type="text" name="email" size="50">

<input type="submit" name="sender" value="Send">
</form> 
<?
/* form2.php */

if(isset($_POST['email'])){ //check if the form is posted
	$input = $_POST['email'];
	
	if (filter_var($input, FILTER_VALIDATE_EMAIL)) {
	
		// set file to write
		$file = 'mailinglist.txt';
	
		// open file
		$fh = fopen($file, 'a') or die("<p class='error'>Could not open file!</p>");
	
		// write to file
		fwrite($fh, ",$input") or die("<p class='error'>Could not write to file!</p>");
	
		// close file
		fclose($fh);
	
		echo "<p>You should now be on our mailing list</p>";
	
}	else {
		echo "<p class='error'>Email invalid.</p>";
	}
}

?>
<form action="" method="post">
Insert your email address to remove from mailing list: <input type="text" name="email-remove" size="50">

<input type="submit" name="asdfasdf" value="Send">

</form>
<?
/* form.php */

if(isset($_POST['email-remove'])){ //check if the form is posted

	$input = $_POST['email-remove'];
	$file = 'mailinglist.txt';
	
		$contents = file_get_contents($file) or die("<p class='error'>Could not read file!</p>");
	
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
	
			$fh = fopen($file, 'w') or die("<p class='error'>Could not open file to write!!</p>");
	
			fwrite($fh, "$write") or die("<p class='error'>Could not write to file!</p>");
		
			fclose($fh);
			echo "Mailing list updated.";
		}
	
	}
	else { echo "<p class='error'>Email address not found.</p>"; }
}
?>
<br/>
<p>&copy 2012-2014 Mommy Daddy Incorporated</p></body></html>