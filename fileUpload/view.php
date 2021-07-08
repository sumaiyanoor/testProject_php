<?php ?>


<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <title>PHP 8 Image Upload Example</title>
</head>

<body class="container d-flex">
    <?php

    include "database.php"; // Using database connection file here

    $records = mysqli_query($conn,"select * from user"); // fetch data from database

    while($data = mysqli_fetch_array($records))
    {
    ?>
    <div class="card justify-content-between mr-5 mt-5" style="width: 18rem;">
        <img class="card-img-top" src="<?php echo $data['file_path']; ?>" />    
        <div class="card-body">
            <h5 class="card-title"><?php echo $data['title']; ?></h5>
            <h4 class="card-text"><?php echo $data['price']; ?></h4>
            <a href="#" class="btn btn-primary">Go somewhere</a>
        </div>
       
        
    </div>	
    <?php
    }
    ?>

</body>
</html>

