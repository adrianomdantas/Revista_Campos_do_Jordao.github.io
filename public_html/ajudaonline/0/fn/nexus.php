<?
error_reporting(E_ALL);
ini_set('display_errors', 1);


$servername = "br424.hostgator.com.br";
$username = "alsoac40_album";
$password = "Figurinha2022*.*";
$zurich   = "alsoac40_rifando";

try
 {
   $conn = new PDO("mysql:host=$servername;dbname=$zurich", $username, $password);
    // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   //echo "Connected successfully";
 } 
catch(PDOException $e)
 {
   echo "Connection failed: " . $e->getMessage();
 }

?>