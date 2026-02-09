<?php
// Check if user is authenticated
if (isset($_SESSION['timestamp'])) {
    // User is logged in, redirect to students
    header('Location: /students');
    exit;
} else {
    // User not logged in, show login page
    header('Location: /login');
    exit;
}
?>