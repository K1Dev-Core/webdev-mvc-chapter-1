<?php

declare(strict_types=1);
function getConnection(): mysqli
{
    $hostname = 'mysql';
    $dbName = 'enrollment';
    $username = 'demo';
    $password = 'abc123';
    $conn = new mysqli($hostname, $username, $password, $dbName);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    return $conn;
}

// database functions ต่างๆ
require_once DATABASES_DIR . '/students.php';
require_once DATABASES_DIR . '/courses.php';