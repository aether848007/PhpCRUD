<?php

$connect = mysqli_connect("MySQL-8.0","root","","CRUD");

if (!$connect) {
    die('Error connect to database!');
}
