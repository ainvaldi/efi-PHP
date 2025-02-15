<?php
  session_start();
  require 'database.php';
	$conexion=mysqli_connect('localhost','root','','efiPHP');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Secciones</title>
</head>
<body>
  <?php require 'partials/header.php' ?>
  <br>
  <?php
  $query = " SELECT * FROM categorias ";
  $result = mysqli_query($conexion, $query);

?>
<div class="container">
<div class="col-sm-12">
  <h2>Secciones</h2>
</div>
  <?php
  while ($row = mysqli_fetch_array($result)) { ?>
    <div class="row">
      <div class="col-sm-3"></div>
      <div class="col-sm-6">
      <div class="list-group">
      <a href="seccionSelec.php?id=<?php echo $row['id'] ?>" class="list-group-item list-group-item-action"> <?php echo utf8_encode($row['nombre']) . '<br>' ?></a>
      </div>
      </div>
      <div class="col-sm-3"></div>
    </div>
  <?php } ?>
</div>

  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>