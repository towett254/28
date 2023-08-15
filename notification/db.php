<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
try{
    
    $host = 'localhost';
$dbname = 'keepitsimple';
$user = 'root';
$password = '';
$pdo = new PDO(
    "mysql:host=" . $host . ";dbname=" . $dbname,
    $user,
    $password
);


$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e){
die("ERROR: Could not connect. " . $e->getMessage());
}



try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //echo "Connected successfully";
} catch (PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>
