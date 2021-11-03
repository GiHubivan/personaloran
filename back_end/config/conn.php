<?php

$host = "ec2-52-2-118-38.compute-1.amazonaws.com";
$user = "miqqocsgehubho";
$password = "1678d7c80e314b2f70b6507ceac256f12703b0c73200a633a41f1934db6a4020";
$dbname = "d1i6csndib0u2k";
$port = "5432";
$con = pg_connect("host=$host dbname=$dbname user=$user password=$password");

if (!$con) {
   die('Connection failed.');
}