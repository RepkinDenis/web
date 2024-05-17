<?php
global $connect;
$connect = mysqli_connect('localhost', 'repkin0q', '9&0SJJgB', 'repkin0q_singup');

if(!$connect){
    die('Error connect to database!');
}
