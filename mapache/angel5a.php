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
    <title>Angel Eduardo Vázquez López</title>
</head>
<body>
    <link href="https://fonts.cdnfonts.com/css/noto-serif-display" rel="stylesheet">
                
    <nav class="navbar navbar-light" style="background-color: #006e90;">
        <div class="container">
            <a class="navbar-brand" href="index.html" style="color:#ecf39e;">Inicio</a>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="./index.html" id="navbarNavDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Tripulación</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="angel.php" style="color: #000;">Mostrar Datos</a>
                            <a class="dropdown-item" href="angel2.php" style="color: #000;">Mostrar Datos</a>
                            <a class="dropdown-item" href="angel3.php" style="color: #000;">Meter Datos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Cacahuate</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="angel4.php" style="color: #000;">Práctica 4</a>
                            <a class="dropdown-item" href="angel5a.php" style="color: #000;">Práctica 5</a>
                            <a class="dropdown-item" href="angel5b.php" style="color: #000;">Práctica 5b</a>
                            <a class="dropdown-item" href="angel6.html" style="color: #000;">Práctica 6</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarNavDropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #ecf39e;">Nose</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="angel7.html" style="color: #000;">Práctica 7</a>
                            <a class="dropdown-item" href="angel8.html" style="color: #000;">Práctica 8</a>
                            <a class="dropdown-item" href="angel9.html" style="color: #000;">Práctica 9</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron">
        <h1>Escuelas Secundarias Técnicas</h1>
    </div>

    <div class="container">
        <form method="POST" id="formulario">
            <div class="form-group">
                <label for="numero_control">Número de Control:</label>
                <input type="text" class="form-control" id="numero_control" name="numero_control" required>
            </div>
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="apellido_paterno">Apellido Paterno:</label>
                <input type="text" class="form-control" id="apellido_paterno" name="apellido_paterno" required>
            </div>
            <div class="form-group">
                <label for="apellido_materno">Apellido Materno:</label>
                <input type="text" class="form-control" id="apellido_materno" name="apellido_materno" required>
            </div>
            <div class="form-group">
                <label for="edad">Edad:</label>
                <input type="number" class="form-control" id="edad" name="edad" required>
            </div>
            <div class="form-group">
                <label for="colonia">Colonia:</label>
                <input type="number" class="form-control" id="colonia" name="colonia" required>
            </div>
            <div class="form-group">
                <label for="especialidad">Especialidad:</label>
                <input type="number" class="form-control" id="especialidad" name="especialidad" required>
            </div>
            <div class="form-group">
                <label for="genero">Género:</label>
                <input type="number" class="form-control" id="genero" name="genero" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo Electrónico:</label>
                <input type="email" class="form-control" id="correo" name="correo" required>
            </div>
            <div class="form-group">
                <label for="telefono">Número de Teléfono:</label>
                <input type="tel" class="form-control" id="telefono" name="telefono" required>
            </div>
            <div class="form-group">
                <label for="fecha_ingreso">Fecha de Ingreso:</label>
                <input type="date" class="form-control" id="fecha_ingreso" name="fecha_ingreso" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Registro</button>
        </form>

        <table class="table table-bordered" style="margin-top: 20px;">
            <thead>
                <tr>
                    <th>Número de Control</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Edad</th>
                    <th>Colonia</th>
                    <th>Especialidad</th>
                    <th>Género</th>
                    <th>Correo</th>
                    <th>Teléfono</th>
                    <th>Fecha de Ingreso</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                error_reporting(E_ALL);
                ini_set('display_errors', 1);

                $username = "root";
                $password = "";
                $servername = "localhost";
                $database = "escuela";

                $conexion = new mysqli($servername, $username, $password, $database);
                if ($conexion->connect_error) {
                    die("Conexión fallida: " . $conexion->connect_error);
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // var_dump($_POST); // Para depuración
                    
                    $numero_control = $conexion->real_escape_string($_POST["numero_control"]);
                    $nombre = $conexion->real_escape_string($_POST["nombre"]);
                    $apellido_paterno = $conexion->real_escape_string($_POST["apellido_paterno"]);
                    $apellido_materno = $conexion->real_escape_string($_POST["apellido_materno"]);
                    $edad = $conexion->real_escape_string($_POST["edad"]);
                    $colonia = $conexion->real_escape_string($_POST["colonia"]);
                    $especialidad = $conexion->real_escape_string($_POST["especialidad"]);
                    $genero = $conexion->real_escape_string($_POST["genero"]);
                    $correo = $conexion->real_escape_string($_POST["correo"]);
                    $telefono = $conexion->real_escape_string($_POST["telefono"]);
                    $fecha_ingreso = $conexion->real_escape_string($_POST["fecha_ingreso"]);

                    // Verificar si la edad existe en la tabla 'edades'
                    $result = $conexion->query("SELECT id FROM edades WHERE edad = '$edad'");
                    if ($result->num_rows > 0) {
                        $row = $result->fetch_assoc();
                        $id_edad = $row['id'];
                    } else {
                        echo "<p>Error: La edad no es válida.</p>";
                        exit();
                    }

                    // Aquí debes obtener los IDs de colonia, especialidad y género
                    // Suponiendo que ya tienes las funciones para obtener esos IDs
                    $id_colonia = 1; // Cambiar por la lógica para obtener el ID real
                    $id_especialidad = 1; // Cambiar por la lógica para obtener el ID real
                    $id_genero = 1; // Cambiar por la lógica para obtener el ID real

                    $sql = "INSERT INTO alumnos (numero_control, nombre, apellido_paterno, apellido_materno, id_edad, id_colonia, id_especialidad, id_genero, correo, telefono, fecha_ingreso)
                            VALUES ('$numero_control', '$nombre', '$apellido_paterno', '$apellido_materno', '$id_edad', '$id_colonia', '$id_especialidad', '$id_genero', '$correo', '$telefono', '$fecha_ingreso')";

                    if ($conexion->query($sql) === TRUE) {
                        header("Location: " . $_SERVER['PHP_SELF']);
                        exit();
                    } else {
                        echo "<p class='error'>Error al agregar al alumno: " . $conexion->error . "</p>";
                    }
                }

                $sql = "SELECT
                    a.numero_control,
                    a.nombre,
                    a.apellido_paterno,
                    a.apellido_materno,
                    e.edad,
                    c.nombre_colonias,
                    es.nombre_especialidad,
                    g.nombre_genero,
                    a.correo,
                    a.telefono,
                    a.fecha_ingreso 
                    FROM alumnos a
                    JOIN edades e ON a.id_edad = e.id
                    JOIN colonias c ON a.id_colonia = c.id
                    JOIN especialidades es ON a.id_especialidad = es.id
                    JOIN generos g ON a.id_genero = g.id";
                $resultado = $conexion->query($sql);

                if ($resultado->num_rows > 0) {
                    while ($row = $resultado->fetch_assoc()) {
                        echo "<tr>
                            <td>{$row['numero_control']}</td>
                            <td>{$row['nombre']}</td>
                            <td>{$row['apellido_paterno']}</td>
                            <td>{$row['apellido_materno']}</td>
                            <td>{$row['edad']}</td>
                            <td>{$row['nombre_colonias']}</td>
                            <td>{$row['nombre_especialidad']}</td>
                            <td>{$row['nombre_genero']}</td>
                            <td>{$row['correo']}</td>
                            <td>{$row['telefono']}</td>
                            <td>{$row['fecha_ingreso']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='11'>No hay registros aún.</td></tr>";
                }

                $conexion->close();
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
