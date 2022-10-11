<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilo2.css">
</head>
<body>
    
</body>
</html>

<?php

    if( isset($_POST["submit"]) && !empty($_POST["submit"]) ){

        $n1 = $_POST['nota1'];
        $n2 = $_POST['nota2'];
        $n3 = $_POST['nota3'];
        $n4 = $_POST['nota4'];
        $nombre = $_POST['nombre'];


        if (!preg_match("/^[a-zñA-ZÑ-áéíóúÁÉÍÓÚ]{3,20}$/",$_POST["nombre"])|| $nombre == ""){
            echo "<b>Ingrese un nombre valido</b>";
            exit;
        
        }else if ($n1<=0 || $n1 >7.0 || $n1 == ""){
            echo "<b>La nota 1 es incorrecta</b>";
            exit;
            
        }else if ($n2<=0 || $n2 >7.0){
            echo "<b>La nota 2 es incorrecta</b>";
            exit;
        }else if ($n3<=0 || $n3 > 7.0 ){
            echo "<b>La nota 3 es incorrecta</b>";
            exit;
        
        }else if ($n4<=0 || $n4 > 7.0 ){
            echo "<b>La nota 4 es incorrecta</b>";

            exit;
        }

        $nota_final = ($n1 + $n2 + $n3 + $n4)/4;

        if($nota_final >=4.0){
            echo "<b>Nombre del estudiante: </b>".$nombre.
            "<br> <br><b>Tus notas fueron : <br></b>".
            "<b>Nota 1</b>: ".$n1.
            "<br><b>Nota 2</b>: ".$n2.
            "<br><b>Nota 3</b>: ".$n3.
            "<br><b>Nota 4</b>: ".$n4.
            "<br><b>Tu promedio fue: </b>".round($nota_final,1)."<br><b>Asignatura: Desarrollo de Sistemas Web Dinámicos</b>"."<br><b>Has aprobado la asignatura</b>";
        }else{
            echo '<script language="javascript">alert("REPROBADO");</script>'."<b>Nombre del estudiante: </b>".
            $nombre."<br> <br><b>Tus notas fueron : <br></b>".
            "<b>Nota 1</b>: ".$n1.
            "<br><b>Nota 2</b>: ".$n2.
            "<br><b>Nota 3</b>: ".$n3.
            "<br><b>Nota 4</b>: ".$n4.
            "<br><b>Tu promedio fue: </b>".round($nota_final,1)."<br><b>Asignatura: Desarrollo de Sistemas Web Dinámicos</b>"."<br><b>REPROBADO</b>";
    
        }
}
?>
