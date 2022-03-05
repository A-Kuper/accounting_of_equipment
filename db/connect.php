<?php
$mysqli = new mysqli('localhost', 'root', '', 'office');

if(mysqli_connect_errno()){
    echo 'Ошибка при подключении к базе данных('.mysqli_connect_errno().' ):'.mysqli_connect_error();
    exit();
}
