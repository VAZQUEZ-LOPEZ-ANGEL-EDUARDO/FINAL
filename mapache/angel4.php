<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="style.css">
    <title>angel eduardo vazquez lopez</title>
</head>
<body>
    <link href="https://fonts.cdnfonts.com/css/noto-serif-display" rel="stylesheet">
                
       <nav class="navbar navbar-ligth" style="background-color: #006e90;">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:#ecf39e;">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./index.html" id="navbarNavDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">tripulacion</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="angel.php" style="color: #000;">mostrar datos</a><br>
                            <a class="dropdown-item" href="angel2.php" style="color: #000;">mostras Datos</a><br>
                            <a class="dropdown-item" href="angel3.php" style="color: #000;">meter Datos</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">cacahuate</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="angel4.php" style="color: #000;">Spractyica 4</a><br>
                            <a class="dropdown-item" href="angel5a.php" style="color: #000;">practica 5</a><br>
                            <a class="dropdown-item" href="angel5b.php" style="color: #000;">practica 5b</a><br>
                            <a class="dropdown-item" href="angel6.html" style="color: #000;">practica 6</a><br>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">nose</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="angel7.HTML" style="color: #000;">practica 7</a><br>
                            <a class="dropdown-item" href="angel8.html" style="color: #000;">practoca 8</a><br>
                            <a class="dropdown-item" href="angel9.html" style="color: #000;">Practoca 9</a><br>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
<?php
$username = "root";
$password = "";
$servername = "localhost";
$database = "aevl";

$conexion = new mysqli($servername, $username, $password, $database);
if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $precio = $_POST["precio"];
    $id_categoria = $_POST["categoria"];

    $sql = "INSERT INTO productos (nombre, precio, id_categoria) VALUES ('$nombre', '$precio', '$id_categoria')";
    if ($conexion->query($sql) === TRUE) {
        echo "<p style='color:green;'>Producto agregado recientemente</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conexion->error . "</p>";
    }
}

$sql_categorias = "SELECT * FROM categorias";
$result_categorias = $conexion->query($sql_categorias);
?>

<!DOCTYPE html>

    <html>
     <head>
    <title>Pagina de prueba</title>
</head>
<body>
     <h1>Registrar Productos</h1>
     <form method = "POST">
        <label>Nombre del producto: </label>
         <input type="text" name="nombre" required><br><br>
         <label>Precio: </label>
        <input type="number" name="precio" required><br><br>
         <label>Categoria: </label>
        <select name="categoria" required>
<option value="">Seleccionar una categoria</option>
<?php
if($result_categorias->num_rows > 0){
 while($row = $result_categorias->fetch_assoc()){
 echo "<option value'" . $row["id"] . "'>". $row["nombre"] . "</option>";
 }
}
?>
</select><br><br>
<input type="submit" value="Agregar producto">
</form>
<h2>Lista de Productos</h2>
<table>
   <tr>
         <th>Nombre</th>
         <th>Precio</th>
         <th>Categoria</th>
</tr>
<?php
$sql_productos = "SELECT productos.nombre, productos.precio, categorias.nombre AS categoria FROM productos JOIN categorias ON productos.id_categoria = categorias.id";
$result_productos = $conexion->query($sql_productos);
if($result_productos->num_rows>0){
 while($row = $result_productos ->fetch_assoc()){
 echo "<tr>
 <th>{$row['nombre']}</th>
 <th>{$row['precio']}</th>
 <th>{$row['categoria']}</th>
</tr>";
 }
}else{
 echo "<tr><td>No hay productos registrados</td></tr>";
}
?>
</body>
</html>
<style>               
.container1{
    display: flex;
    justify-content: center;
    align-items: center;
    width: 50%;
    background-color: #282a36;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0,0,0,0.2);
    color: white;
  }
  h1 {
    text-align: center;
    color: #ff79c6;
    margin-bottom: 15px;
  }
  form {
    display: flex;
    flex-direction: column;
  }
  label {
    font-size: 16px;
    margin-bottom: 5px; 
  }
  input[type="text"] {
    padding: 8px;
    margin-bottom: 10px;
    border: none;
    border-radius: 5px;
    font-size: 16px;
    background-color: #44475a;
    color: #fff;
  }
  input[type="submit"] {
    padding: 10px;
    background-color: #50fa7b;
    border: none;
    color: #282a36;
    font-size: 16px;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
  }
  input[type="submit"]:hover {
    background-color: #3ae374;
  }

</style>