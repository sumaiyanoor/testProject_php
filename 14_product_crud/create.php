<?php
//with PDO connection

/* $servername = "localhost";
$username = "root";
$password = "";
$dbname = "products_crud";

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

$conn = null; */

  

  //without PDO connection
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "products_crud";

  if(isset($_POST["submit"]))
  {
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
      //file upload
      $var1 = rand(1111,9999);  // generate random number in $var1 variable
      $var2 = rand(1111,9999);  // generate random number in $var2 variable
    
      $var3 = $var1.$var2;  // concatenate $var1 and $var2 in $var3
      $var3 = md5($var3);   // convert $var3 using md5 function and generate 32 characters hex number
  
      $fnm = $_FILES["image"]["name"];    // get the image name in $fnm variable
      /* $dst = "./all_images/".$var3.$fnm; */  // storing image path into the {all_images} folder with 32 characters hex number and file name
      $dst_db = "all_images/".$var3.$fnm; // storing image path into the database with 32 characters hex number and file name
  
      move_uploaded_file($_FILES["image"]["name"],$dst_db);  // move image into the {all_images} folder with 32 characters hex number and image name
    
      $sql = "INSERT INTO products (title, image, description, price, create_date)
      VALUES ('$title', '$dst_db ','$description', $price, '$date')";
      
      if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
      } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
      }
      
  }

?>
<?php 

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
    
    <form action="create.php" method="post">
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

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>

</form>
<hr/>

<h2>All Records</h2>

<table border="2">
  <tr>
    <td>Sr.No.</td>
    <td>Name</td>
    <td>Images</td>
  </tr>
  <?php

$records = mysqli_query($conn,"select * from products"); // fetch data from database

while($data = mysqli_fetch_array($records))
{
?>
  <tr>
    <td><?php echo $data['id']; ?></td>
    <td><?php echo $data['title']; ?></td>
    <td><img src="<?php echo $data['image']; ?>" width="100" height="100"></td>
  </tr>	
<?php
}
?>

</table>

<?php 
 $conn->close();
?>
  </body>
</html>