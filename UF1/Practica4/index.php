<?php 

  $db_host = "localhost";
  $db_nombre = "practica4";
  $db_usuario = "root";
  $db_passwd = "";

  $connexio = mysqli_connect($db_host, $db_usuario, $db_passwd, $db_nombre);
  
  $consulta = "SELECT * FROM productes";

  $products = mysqli_query($connexio, $consulta); 
  ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PHP + MySQL</title>
    <style>
      body {
        padding: 50px;
      }
    </style>
  </head>
  <body>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($products as $i => $products) { ?>
      <tr>
        <th scope="row"><?php echo $i +1 ?></th>
        <td><?php echo $products['Name'] ?></td>
        <td><?php echo $products['Description'] ?></td>
        <td><?php echo $products['Price'] ?></td>
        <td><a href="edit.php?id=<?php echo $product['NumID']?>"><button type="button" class="btn btn-outline-primary">Edit</button></a></td>
        <td><a href="delete.php?id=<?php echo $product['NumID']?>"><button type="button" class="btn btn-outline-danger">Delete</button></a></td>
      </tr>
    <?php } ?>
  </tbody>
  <a href="form_product.php"><button type="button">Afegir</button></a>
</table>
  </body>
</html>