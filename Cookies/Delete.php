<!DOCTYPE html>
<html>
<head>
    <title>Cookies</title>
</head>
<h2> Delete </h2>
<body>
<?php
// Delete the "userList" and "userCourse" cookies

// Set the "userList" cookie's expiration time to the past (1 hour ago) to delete it
setcookie("userList", "", time() - 3600);

// Set the "userCourse" cookie's expiration time to the past (1 hour ago) to delete it
setcookie("userCourse", "", time() - 3600);

// Display a message to confirm that the cookies have been deleted
echo "<br>Cookies has been deleted.";
?>
</body>
</html>