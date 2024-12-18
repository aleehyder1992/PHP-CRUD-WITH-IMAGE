<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CREATE BOOKS DETAILS</title>
</head>
<style>
  
</style>
<body>
<style>
    body {
      font-family: 'Montserrat', sans-serif;
      background-color: #f4f4f9;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .form-box {
      background-color: #e6e6e6;
      padding: 30px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 300px;
      text-align: center;
    }

    input[type="text"], input[type="file"] {
      width: 100%;
      padding: 10px;
      margin: 10px 0;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-sizing: border-box;
    }

    input[type="submit"] {
      width: 100%;
      background-color: #007bff;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-size: 16px;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }

    a {
      display: block;
      margin-top: 15px;
      color: #007bff;
      text-decoration: none;
      font-size: 14px;
    }

    a:hover {
      text-decoration: underline;
    }
  </style>
  <div class="form-box">
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="booktitle" placeholder="Book Title">
    <br><br>
    <input type="text" name="bookauthor" placeholder="Book Author">
    <br><br>
    <input type="file" name="bookphoto">
    <br><br>
    <input type="submit" name="insert_btn" Value="Submit">
</form>
<br>
<a href="view.php">View Books</a>
  </div>


<?php
include('insert.php');
?>

  
</body>
</html>