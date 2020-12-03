<?php

$servername = 'db';
$username = 'root';
$password = 'toor';

$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
   exit('Error: '.mysqli_connect_error().PHP_EOL);
}
echo 'Proxy connected'.PHP_EOL;

echo 'Database connected'.PHP_EOL;

die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Error</title>
</head>
<body>
   <h1>Proxy error</h1>
</body>
</html>