<?php
include 'connection.php';
$id=$_GET['id'];

$select="SELECT * FROM books WHERE bookid= '$id' ";
$select_q=mysqli_query($con,$select);
$fetch=mysqli_fetch_array($select_q);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>UPDATE BOOK</title>
</head>
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
<body>
<div class="form-box">
  <form action="" method="POST" enctype="multipart/form-data">
    <input type="text" name="booktitle" placeholder="Book Title" 
    value="<?php echo $fetch['book_name']; ?>"
    <br><br>
    <input type="text" name="bookauthor" placeholder="Book Author"
    value="<?php echo $fetch['book_author'] ?>">
    <br><br>
    <input type="file" name="bookphoto">
    <img src="images/<?php echo $fetch['book_photo'] ?>" width="80px">
    <br><br>
    <input type="submit" name="update_btn" Value="Submit">
</form>
<br>
<a href="view.php">View Books</a>
</div>

<?php
if (isset($_POST['update_btn'])) {
  $title =$_POST['booktitle'];
  $author =$_POST['bookauthor'];
  $image =$_FILES['bookphoto']['name'];
  $tmp_name=$_FILES['bookphoto']['tmp_name'];
  $destination="images/".$image;
  
  if($image!=""){
    move_uploaded_file($tmp_name,$destination);
    $update="UPDATE books SET book_name='$title',book_author='$author',book_photo='$image' WHERE bookid='$id'";
    $update_q=mysqli_query($con,$update);
    header('location:view.php');
  }else{
    
  }
 

}
?>
  
</body>
</html>