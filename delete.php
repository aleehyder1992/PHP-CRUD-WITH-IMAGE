<?php
include 'connection.php';
$id=$_GET['id'];

$delete="DELETE FROM books WHERE bookid='$id'";
$delete_q=mysqli_query($con,$delete);
header('location:view.php');

?>