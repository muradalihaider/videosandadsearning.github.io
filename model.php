<?php
// if (isset($_POST['submit'])) {
//     if (isset($_POST['name']) && isset($_POST['password']) &&
//         isset($_POST['gender']) && isset($_POST['email']) &&
//         isset( isset($_POST['phone'])) {
        
$name = $_POST['name'];
$password = $_POST['password'];
$gender = $_POST['gender'];
$email = $_POST['email'];
// $phoneCode = $_POST['phoneCode'];
$phone = $_POST['phone'];
$conn = new mysqli('localhost','root','','gpgckhar');

// $host = "localhost";
// $dbname = "root";
// $dbPassword = "";
// $dbName = "gpgckhar";
// $conn = new mysqli($host, $dbname, $dbPassword, $dbName);

if ($conn->connect_error) {
    die('Could not connect to the database.  '.$conn->connect_error);
}
else {
    
    // $Select = "SELECT email FROM register WHERE email = ? LIMIT 1";
    // $Insert = "INSERT INTO register(username, password, gender, email, phoneCode, phone) values(?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare("inserte into register(name,password,gender,email,phone) values(?, ?, ?, ?, ?, ?)");
    // $stmt->bind_param("s", $email);
    // $stmt->execute();
    // $stmt->bind_result($resultEmail);
    // $stmt->store_result();
    // $stmt->fetch();
    // $rnum = $stmt->num_rows;
    // if ($rnum == 0) {
    //     $stmt->close();
    //     $stmt = $conn->prepare($Insert);

    $stmt->bind_param("ssssi",$name, $password, $gender, $email, $phone);
    $stmt->execute();
    echo "New record inserted sucessfully.";

$stmt->close();
$conn->close();
}
?>