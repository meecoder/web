<html>
<body bgcolor="20B2AA">
<A HREF="index.html"><img src="logo.png" height="120" width="160"></A>
<?php

// set file to read
$file = 'mailinglist.txt' or die('Could not read file!');

$contents = file_get_contents($file);
$emails = explode(',', $contents);

foreach($emails as $field) {
    echo $field;
    echo "<br />";
}

if (strlen($contents) == 0) {
	echo "No emails on mailing list!";

}

?>
</body>
</html>
