<?php
$host     = "localhost";
$username = "root";
$password = "MySql@2024";
$dbname   = "test";
$dsn      = "mysql:host=$host;dbname=$dbname";
$options  = array(
PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);