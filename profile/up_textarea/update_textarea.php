<?php
$connect = mysqli_connect('localhost', 'repkin0q', 'UEmv%5Ln', 'repkin0q_profile');

if(!$connect){
    die('Error connect to database!');
}

$user_id = $_POST['user_id'];
$task = $_POST['task'];

$users = mysqli_query($connect, "SELECT * FROM '$task' WHERE user_id='$user_id'");
$users = mysqli_fetch_all($users);

echo json_encode($users);
?>