<html>

<head><?php
include($_SERVER["DOCUMENT_ROOT"] . "/header.php");
?></head>
<body>

<?php

// retrieve form data

$input = $_POST['ans'];

// use it
$answer = 221 + 772;

if ($input == $answer) {

	echo "Correct!";

	}

else {

	echo "Sorry Incorrect";

	}

?>

</body>

</html>
