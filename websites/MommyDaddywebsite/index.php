<html><head><?php
include($_SERVER["DOCUMENT_ROOT"] . "/header.php");
?><title>Mommy Daddy Website</title></head><body bgcolor="20B2AA"><h1>Welcome to the Mommy Daddy Website!</h1>
<a href="aboutus.php">About Us</a>
<h4>Join our mailing list!</h4>
<form action="mailinglist.php" method="post">
Insert your email address: <input type="text" name="email" size="50">

<input type="submit" value="Send">

</form>
<form action="mailinglistremove.php" method="post">
Insert your email address to remove from mailing list: <input type="text" name="email" size="50">

<input type="submit" value="Send">

</form>


<p>&copy 2012-2014 Mommy Daddy Incorporated</p></body></html>
