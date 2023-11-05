<!DOCTYPE html>
<html>
<head>
    <title>Cookies</title>
</head>
<h1> SET OF COOKIES</h1>
<body>
<?php
// Set the "userList" and "userCourse" cookies with values and expiration time

// Define the value for the "userList" cookie
$userName = "ODLANYER R. LIAQUEN";

// Define the value for the "userCourse" cookie
$userCourse = "IT";

// Calculate the expiration time (3.5 hours from the current time)
$expiration_time = time() + 3.5 * 3600; // 3.5 hours in seconds

// Set the "userList" cookie with its value and expiration time
setcookie("userList", $userName, $expiration_time);

// Set the "userCourse" cookie with its value and expiration time
setcookie("userCourse", $userCourse, $expiration_time);

// Display a message to confirm that the cookies have been set
echo "Cookies have been set with the values 'DE LA CRUZ, LEOMAR P.' and 'IT' and will expire in 3.5 hours.";
?>
</body>
</html>