<?php
// index.php

// Basic routing simulation
$page = $_GET['page'] ?? 'home';

function logMessage($message) {
    error_log("[PHP LOG] " . $message);
}

switch ($page) {
    case 'home':
        logMessage("Visited home page");
        echo "<h1>Welcome to My PHP App</h1>";
        break;
    case 'contact':
        logMessage("Visited contact page");
        echo "<h1>Contact Us</h1>";
        break;
    default:
        logMessage("Visited unknown page: $page");
        echo "<h1>404 Not Found</h1>";
        break;
}
?>
