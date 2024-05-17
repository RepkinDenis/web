<?php
    global $connect;
    require_once 'connect.php';

   $user_id = $_GET['id'];
   $moves = $_POST['moves'];

   mysqli_query($connect, "INSERT INTO game (moves, user_id) VALUES ('$moves', '$user_id')");

   header("Location: /memory/index.php?id=" . $_GET['id']);
?>