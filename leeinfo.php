<?php

    $Nombre = $_POST['Nombre'];
    $Ap = $_POST['Ap'];
    $Am = $_POST['Am'];
    $Nombre_de_usuario = $_POST['Nombre_de_usuario'];
    $Password = $_POST['Password'];
    $fecha_nacimiento =$_POST['fecha_nacimiento'];
    $Pais = $_POST['Pais'];
    $Ciudad = $_POST['Ciudad'];
    $Calle = $_POST['Calle'];
    $Numero_de_casa = $_POST['Numero_de_casa'];
    $Colonia = $_POST['Colonia'];
    $Email= $_POST['Email'];
    $RFC= $_POST['RFC'];
    $CP= $_POST['CP'];


    echo "Nombre: <br>".$Nombre ;
    echo "<br>Apellido paterno: <br>".$Ap;
    echo "<br>Apellido materno: <br>".$Am;
    echo "<br>Nombre de usuario: <br>".$Nombre_de_usuario;
    echo "<br>Contraseña: <br>".$Password;
    echo "<br>Fecha de nacimiento: <br>".$fecha_nacimiento;
    echo "<br>Pais: <br>".$Pais;
    echo "<br>Ciudad: <br>".$Ciudad;
    echo "<br>Calle: <br>".$Calle;
    echo "<br>Numero de casa: <br>".$Numero_de_casa;
    echo "<br>Colonia: <br>".$Colonia;
    echo "<br>E-mail: <br>".$Email;
    echo "<br>R.F.C.: <br>".$RFC;
    echo "<br>Codigo postal: <br>".$CP;


?>