<html>
<body>
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