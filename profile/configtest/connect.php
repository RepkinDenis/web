<?php
global $connect;
$connect = mysqli_connect('localhost', 'repkin0q', 'UEmv%5Ln', 'repkin0q_profile');
if(!$connect){
    die('Error connect to database!');
}
