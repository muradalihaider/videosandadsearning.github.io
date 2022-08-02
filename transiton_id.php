<!DOCTYPE html>
<html>
<head>
<style>
    h1 {
        color :   #ffb31a;
    }
    body {
        background-color: #f2f2f2;
        text-align: center;
    }

table{
    /* border: 1px solid black; */
    width: 50%;
    margin-top: 5%;
    margin-left: auto;
    margin-right: auto;
}
th {
    /* border: 1px solid black; */
    border-bottom: 1px solid #ddd;

}
td {
    /* border: 1px solid black; */
    text-align: center;
    border-bottom: 1px solid #ddd;
}
tr:hover {background-color: coral;}
/* tr:nth-child(even) {background-color: #f2f2f2; */
}

</style>
</head>
<body>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "vae_db";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, trxt_id FROM transiton_id";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h1>User Datail</h1>";
    echo "<table><tr><th>ID</th><th>Transition ID</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["trxt_id"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 results";
}

$conn->close();
?>

</body>
</html>
