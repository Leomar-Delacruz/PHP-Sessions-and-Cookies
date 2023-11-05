<!DOCTYPE html>
<html>
<head>
    <title>Session</title>
</head>
<h2> Assign - Session </h2>
<body>
<?php
// Start a session

// Start a new session or resume the existing session
session_start();

// Set session variables

// Assign values to session variables
$_SESSION["userId"] = 19842;
$_SESSION["userName"] = "DE LA CRUZ, LEOMAR P.";
$_SESSION["Age"] = "20 YEAR OLD";

// Display a message to confirm that the session variables have been set
echo "Session variables has been set.";
?>
</body>
</html>