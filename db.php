<?php
    $servername = "127.0.0.1";
    $username = "root";
    $password = "eve@123";
    $dbName = "sqldb";

    $link = mysqli_connect($servername, $username, $password);
    
    if (!$link) {
    die("Error with connection: " . mysqli_connection_error());
    }
    
    $sql = "CREATE DATABASE IF NOT EXISTS $dbName";
    
    if (!mysqli_query($link, $sql)) {
    echo "Cannot create database";
    }
    
    mysqli_close($link);
    
    $link = mysqli_connect($servername, $username, $password, $dbName);
    
    $sql = "CREATE TABLE IF NOT EXISTS user (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        username VARCHAR(64) NOT NULL UNIQUE,
        email VARCHAR(64) NOT NULL,
        pswd VARCHAR(256) NOT NULL
    )";
    
    if (!mysqli_query($link, $sql)) {
        echo "Table Users not found";
    }
    
    $sql = "CREATE TABLE IF NOT EXISTS post (
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
        title VARCHAR(64) NOT NULL,
        body TEXT NOT NULL,
        add_date DATE DEFAULT CURRENT_DATE
    )";
    
    if (!mysqli_query($link, $sql)) {
        echo "Table Users not found";
    }
    
    mysqli_close($link);
?>