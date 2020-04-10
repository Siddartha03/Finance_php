<?php

$serverName = "localhost";
$username = "root";
$password = "";
$dbname = "pocketcash";
$conn = new mysqli($serverName,$username,$password,$dbname);

$q = "create table profile(
    id int(100) primary key auto_increment,
    name varchar(50) not null,
    email varchar(50) not null,
    password varchar(20) not null
)";
$res1 = $conn->query($q);

// $q1 = "insert into customer(name,city,credit_score)values('Siddu','Jalandhar',6)";
// $conn->query($q1);

?>