


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
      <th scope="col">Name</th>
      <th scope="col">Description</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <form action="add_product.php" method="GET">
            <td><p> Name: <input type="text" name="name" /></p></td>
            <td><p> Description: <input type="text" name="description" /></p></td>
            <td><p> Price: <input type="text" name="price" /></p></td>
            <td><input type="submit" value="Afegeix" name="afegir"></td>
        </form>
    </tr>
  </tbody>
  </body>
</html>