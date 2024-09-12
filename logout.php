<?php
session_start();

// Destroy all session data
session_unset();
session_destroy();

// Prevent the user from navigating back after logout by setting cache control headers
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// Optionally display a logout message before redirecting
echo "You have been logged out successfully.";

// Redirect to login page after 2 seconds
header("refresh:2;url=login.html");
exit();
?>
