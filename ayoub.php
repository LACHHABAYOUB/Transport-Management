<?php
// define variables and set to empty values
$prix_total ="";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $prix_total  = test_input($_POST["prix_total "]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "easyloc";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql =  INSERT INTO tarif (id_facture, prix_total) 
    VALUES (NULL, '$prix_total');
    
    // use exec() because no results are returned
    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>

<a href="http://localhost/mundia/">revenir</a><br>