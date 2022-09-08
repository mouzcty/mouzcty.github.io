<!DOCTYPE html>
<html>

<head>
</head>

<body>
<?php
// used to connect to the database
$host = "localhost";
$db_name = "tienyong";
$username = "root";
$password = "";
  
try {
    $con = new PDO("mysql:host={$host};dbname={$db_name}", $username, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
  
// show error
catch(PDOException $exception){
    echo "Connection error: ".$exception->getMessage();
}
?>
</body>

</html>