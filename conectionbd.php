<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$servername="localhost";
$username="root";
$password ="1234";
$database="db_login";

$conn=new mysqli($servername, $username, $password, $database);

if ($conn->connect_errno){
    echo "nose pudo conectar".$conn->connect_errno;
}else{
    echo "conexion exitosa";
}

   
?>
</body>
</html>