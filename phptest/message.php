<html>

<head><?php
include($_SERVER["DOCUMENT_ROOT"] . "/header.php");
?></head>
<body>

<?php

// retrieve form data

$input = $_POST['msg'];

// use it

echo "You said: <i>$input</i>";

?>

</body>

</html>
