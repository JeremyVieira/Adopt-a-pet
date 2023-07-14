<!DOCTYPE html>
<html>
<head>
    <title>Logout</title>
</head>
<body>
    <h1>Logout</h1>

    <?php
    session_start(); // Start or resume the session

    // Clear all session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Display confirmation message
    echo "<p>Logout successful. Your session has been terminated.</p>";

    // Redirect to index.php
    header("Location: index.php");
    exit; // Make sure to exit after redirecting
    ?>

</body>
</html>