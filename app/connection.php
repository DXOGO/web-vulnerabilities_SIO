<?php
$servername = "spoton";
$username = "admin";
$password = "admin";
$databasename = "spoton";

// Create connection
$conn = new mysqli($servername, $username, $password, $databasename);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";

/////////////////// para imprimir dados da base de dados ///////////////////
// $sql = "SELECT * FROM users";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) {
// //   // output data of each row
// while($row = $result->fetch_assoc()) {
//   echo "id: " . $row["id"]. " - Name: " . $row["nome"]. " - EMail: " . $row["email"]. " - pass: " . $row["pass"]. "<br>";
// }
// } else {
//   echo "0 results";
// }  

// for ($num=23; $num <34; $num++){
//   mysqli_query($conn, "DELETE from users WHERE id='$num'");
// }


////////////////////////////////////////////////////////////////////////////

// if (isset($_POST['searchbtn'])) {
//   $string = $_POST['searchitem'];

//   $conn->query("SELECT * FROM trips") or die($conn->error);
// } 
?>

