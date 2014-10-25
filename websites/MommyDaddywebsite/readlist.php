<html>
<link rel=stylesheet href="style.css" type="text/css">
<?php
include($_SERVER["DOCUMENT_ROOT"] . "/header.php");
?>
<head>
<title>Mommy Daddy Website Mailing List</title>
</head>
<body bgcolor="20B2AA">
<br/>
<A HREF="index.php"><img src="logo.png" height="120" width="160"></A>
<h3><u>Mailing List contents</u></h3>
<?php

// set file to read
$file = 'mailinglist.txt' or die('<p class="error">Could not read file!</p>');

$contents = file_get_contents($file);
$emails = explode(',', $contents);

foreach($emails as $field) {
	echo "!";
    echo $field;
    echo "<br />";
}

if (strlen($contents) == 0) {
	echo "No emails on mailing list!";

}

?>
</body>
</html>
