<?php
//with PDO connection

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_crud";

// If upload button is clicked ...
if (isset($_POST['image'])) {
  $image = $_FILES["uploadfile"]["name"];
  $tempname = $_FILES["uploadfile"]["tmp_name"];   
      $folder = "image/".$filename;
}
$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST ['price'];
$date = date('Y-m-d H:i:s');

try {
  $conn = new PDO("mysql:host=$servername; dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "INSERT INTO products (title, image, description, price, create_date)
  VALUES ('$title', '$image','$description', $price, '$date')";
 
 
 $conn->exec($sql);
  echo "New record created successfully";
} catch(PDOException $e) {
    echo $sql . "<br>" . $e->getMessage();
}

$conn = null;

  

  //without PDO connection
  /* $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "products_crud";
  

$title = $_POST['title'];
$description = $_POST['description'];
$price = $_POST ['price'];
$date = date('Y-m-d H:i:s');
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
  
  $sql = "INSERT INTO products (title, image, description, price, create_date)
  VALUES ('$title', ' ','$description', $price, '$date')";
  
  if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
  
  $conn->close(); */

?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="app.css">

    <title>products CRUD</title>
    
  </head>
  <body>
    <h1> Create new Products</h1>
    
    <form action="" method="post">
  <div class="mb-3">
    <label>Product Image</label>
    <br>
    <input type="file" name="image">
  </div>
  
  <div class="mb-3">
    <label>Product Title</label>
    <input type="text"  name="title" class="form-control">
  </div>
  
  <div class="mb-3">
    <label>Product Description</label>
    <textarea type="text" class="form-control" name="description"></textarea>
  </div>
  
  <div class="mb-3">
    <label>Product Price</label>
    <input type="number"  step=".01" name="price" class="form-control">
  </div>

  
 
  <button type="submit" class="btn btn-primary">Submit</button>


</form>


  </body>
</html>