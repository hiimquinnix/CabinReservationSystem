<?php  
$name = $_POST['Client_Name'];
$email = $_POST['Client_Email'];
$mobile = $_POST['Mobile_Number'];
$check_in = $_POST['Check_In_Date'];
$check_out = $_POST['Check_Out_Date'];
$expected_guests = $_POST['Expected_Guest'];
$reference = $_POST['Reference'];

$servername = "localhost";
$dbname = "cabin_db";
$username = "root";
$password = "";

function function_alert($message) { 
  echo "<script>alert('$message'); window.location.href = 'index.html';</script>"; 
}
 

$conn = mysqli_connect($servername, $username, $password, $dbname);

if(mysqli_connect_errno()) {
  die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO contacts (name, email, mobile, check_in, check_out, expected_guests, reference) VALUES (?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
  die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssssss", $name, $email, $mobile, $check_in, $check_out, $expected_guests, $reference);

mysqli_stmt_execute($stmt);

function_alert("Your form was successfully submitted!"); 
mysqli_close($conn);  
?>
