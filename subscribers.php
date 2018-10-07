<?php
$servername = "localhost";
$username = "id390279_svcsubs";
$password = "YTSEz7NLtwLjDWPXC3Ct";
$dbname = "id390279_tbl_subs";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT emailaddress, regdate FROM tlsubs";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "email: " . $row["emailaddress"]. " - regdate: " . $row["regdate"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>