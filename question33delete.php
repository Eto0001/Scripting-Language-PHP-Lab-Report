<?php
include 'question33db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM courses WHERE id=$id");
header("Location: question33list.php");
?>
