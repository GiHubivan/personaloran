<?php

$host = "127.0.0.1";
$user = "postgres";
$password = "postgres";
$dbname = "personal";
$port = "5432";
$con = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$con) {
   die('Connection failed.');
}