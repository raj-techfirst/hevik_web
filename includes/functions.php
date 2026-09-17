<?php
// Helper functions

function cleanInput($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function redirect($url)
{
    header("Location: " . $url);
    exit();
}

function isPost()
{
    return $_SERVER['REQUEST_METHOD'] === 'POST';
}
