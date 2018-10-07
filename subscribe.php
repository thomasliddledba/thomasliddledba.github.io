<?php
$servername = "localhost";
$username = "id390279_svcsubs";
$password = "YTSEz7NLtwLjDWPXC3Ct";
$dbname = "id390279_tbl_subs";

$em = $_GET['em'];

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    header( 'Location: http://www.thomasliddledba.com/subscribe_thankyou.html' ) ;

}

// insert record
$sql = "INSERT INTO tlsubs(emailaddress) VALUES ('$em')";

if (mysqli_query($conn, $sql)) {
    header( 'Location: http://www.thomasliddledba.com/subscribe_thankyou.html' ) ;
} else {
    header( 'Location: http://www.thomasliddledba.com/subscribe_thankyou.html' ) ;
}

mysqli_close($conn);
?>