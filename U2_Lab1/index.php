<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>Calcula tu promedio</h1>
    <h4>"Poner tus notas con un numero y punto (ej: 4.0)"</h4>
    <form action="procesador.php" method="POST">

        <label for="" id="estudiante">Estudiante :</label> <br>
        <input type="text" name="nombre" pattern = "[a-zA-Z-áéíóúÁÉÍÓÚ]{3,20}"> <br><br>

        <label for="">Nota 1 :</label> <br>
        <input type="text" name="nota1"> <br> <br>


        <label for="">Nota 2 :</label> <br>
        <input type="text" name="nota2"> <br> <br>

        <label for="">Nota 3 :</label> <br>
        <input type="text" name="nota3"> <br> <br>

        <label for="">Nota 4 :</label> <br>
        <input type="text" name = "nota4"> <br> <br>


        <input type="submit" value="Enviar" name="submit">
    </form>
</body>
</html>