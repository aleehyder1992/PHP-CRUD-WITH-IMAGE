<?php
include('connection.php');
if (isset($_POST['insert_btn'])){
   $title =$_POST['booktitle'];
   $author =$_POST['bookauthor'];
   $image =$_FILES['bookphoto']['name'];
   $tmp_name=$_FILES['bookphoto']['tmp_name'];
   $destination="images/".$image;
   move_uploaded_file($tmp_name,$destination);

  $insert = "INSERT INTO books (book_name, book_author, book_photo) VALUES ('$title', '$author', '$image')";
  $insert_q = mysqli_query($con, $insert);
  if ($insert_q) {
    ?>

    <script type="text/javascript">
      alert("Data Saved Successfully");
    </script>


     <?php
} else {
  ?>

  <script type="text/javascript">
    alert("Please Try Again");
  </script>


   <?php
}
  
}
// Close the connection
$con->close();
?>