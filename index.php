<?php
  session_start();
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
    <title>Publicaciones</title>
</head>
<body>
  <?php require 'partials/header.php' ?>
  <br>
	<?php 
		$sql="SELECT * from publicaciones INNER JOIN users ON users.id = publicaciones.user_id ORDER BY creado";
		$result=mysqli_query($conexion,$sql);
	?>

	<?php while ($row = mysqli_fetch_array($result)) { ?>
    <div class="card">
  <div class="card-header">
  <a href="pubAutor.php?id=<?php echo $row[6] ?>" >
  <div class="col-sm-12">
                <div class="col-sm-10">
                </div>
                <div class="col-sm-2">
                    <img  src="<?php echo utf8_encode($row['avatar']) ?>" width="50">
                    <h6> Hecho por: <?php echo utf8_encode($row['firstname']) . ' ' . utf8_encode($row['lastname']) ?></h6>
                    </a>
                </div>
  </div>
  <div class="card-body">
    <blockquote class="blockquote mb-0">
    <a href="detallesPost.php?id=<?php echo $row[0] ?>" class="list-group-item list-group-item-action"> 						
        <h3><?php echo ($row['titulo']) ?></h3>
				<img  src="<?php echo ($row['image']) ?>"height="80" width="120">
        <h6> Publicado: <?php echo substr(utf8_encode($row['creado']) , 0, 11) . ' a las ' . substr(utf8_encode($row['creado']) , 11, 23) ; ?></h6>
        <h6> Modificado por última vez: <?php echo substr(utf8_encode($row['actualizado']) , 0, 11) . ' a las ' . substr(utf8_encode($row['actualizado']) , 11, 23)  ?></h6>
        <h5><?php echo ($row['descripcion']) ?></h5>
        </a>
    </blockquote>
  </div>
</div>
</div>
  <?php }
  ?>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

</body>
</html>