﻿@page
@{
    ViewData["Title"] = "Connect";
}

<?php
    $dsn = 'mysql:host=localhost;dbname=mymovies';
    $username = 'root';
    $password = '';
    $db = new PDO($dsn, $username, $password);
    //set error mode to exception
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
?>
