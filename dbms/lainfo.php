<!Doctype html>
<table border="1" id="table">

    <p> <tr><th bgcolor="#9999FF">Linear algebra</th><th bgcolor="#9999FF">Units</th><th bgcolor="#9999FF">Chapters</th><th bgcolor="#9999FF">Unit_info</th><th bgcolor="#9999FF">Url</th>
    </p>
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

$sql = "SELECT course_info,credit FROM course where course_id='4CS_LA' and sem='4'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo "<tr><td linear algebra: >	" . $row["course_info"]."</td><td>"$row["credit"] "</td></tr>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
</table> 
</html