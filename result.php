<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "mydb1";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Set Charset
mysqli_set_charset($conn, "utf8");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// define variables and set to empty values
$Firstname = $Lastname = $Email = $Number = $Age = $Gender = $Comment = $Address = $Disease = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $Firstname = test_input($_POST["Firstname"]);
  //$name = trim($_POST["name"]);
  $Lastname = test_input("Lastname");
  $Email = test_input($_POST["Email"]);
  $Number = test_input($_POST["Number"]);
  $Age = test_input($_POST["Age"]);
  $address = test_input($_POST["address"]);
  $Disease = test_input($_POST["Disease"]);
  $Gender = test_input($_POST["Gender"]);
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

echo "<h2>Your Input:</h2>";
echo $Firstname."<br>".$Lastname."<br>".$Email."<br>".$Number."<br>".$Age."<br>".$address."<br>".$Disease."<br>".$Gender."<br>";

//insert data
$sql = "INSERT INTO userprofile2 (Firstname,	Lastname, Email, Number, Age, Address, Disease) 
VALUES ('$Firstname','$Lastname', '$Email','$Number', '$Age', '$address','$Disease')";

//echo $sql."<br>";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);

?>