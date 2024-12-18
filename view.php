<?php
include('connection.php');
$select="SELECT * FROM books";
$select_q=mysqli_query($con,$select);
$data=mysqli_num_rows($select_q);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VIEW BOOKS</title>
</head>
<style>
  table {
    width: 50%;
    border-collapse: collapse;
    font-family: 'Montserrat', sans-serif; /* Using Montserrat */
    margin: 20px 0;
  }

  th, td {
    padding: 15px;
    text-align: center;
    border: 1px solid #ddd;
  }

  th {
    background-color: crimson;
    color: white;
    font-size: 18px;
  }

  td {
    font-size: 16px;
    color: #333;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  tr:hover {
    background-color: #f1f1f1;
  }

  a {
    text-decoration: none;
    color: #007BFF;
    font-weight: bold;
  }

  a:hover {
    color: #0056b3;
    text-decoration: underline;
  }

  img {
    border-radius: 5px;
  }

  .delete a {
    color: crimson;
  }

</style>
<body>
<table border="1px" cellspacing="0" cellpadding="10px"> 
  <tr>
    <th>Book Title</th>
    <th>Book Author</th>
    <th>Book Photos</th>
    <th colspan="2">Actions</th>
  </tr>

<?php

if($data){
  while ($row=mysqli_fetch_array($select_q)){
    ?>

    <tr>
      <td><?php echo $row['book_name']; ?></td>
      <td><?php echo $row['book_author']; ?></td>
      <td><img src="images/<?php echo $row['book_photo']; ?>" width="80px"></td>
      <td><a href="update.php?id=<?php echo $row['bookid']; ?>">Edit</a></td>
      <td class="delete"><a onclick="return confirm('Are Your Sure Want To Delete This?')" href="delete.php?id=<?php echo $row['bookid']; ?>">Delete</a></td>
     
    </tr>

    <?php
  }
} else {
  echo "No Data";
}

?>
</table>

</body>
</html>
