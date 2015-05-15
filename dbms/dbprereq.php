<!Doctype html>
<table border="1" id="table">

    <p> <tr><th bgcolor="#9999FF">Computer science</th></p>
   </tr>
     
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbms_pro";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection_aborted(oid)
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT pre_name,course_id FROM pre_req where course_id = '4CS_DBMS'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo "<tr><td semister: >" . $row["pre_name"]."</tr></td>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table>
</html>