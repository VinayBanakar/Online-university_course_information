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

$sql = "SELECT unit_name,chapters,unit_info,url FROM units where course_id = '3CS_DSJ'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo "<tr><td>"."<td unitn>". $row["unit_name"] ."</td>"."<td chap>".$row["chapters"]."</td>"."<td info>".$row["unit_info"]."<td>".$row["url"]."</td>"."</tr></td>";
    }
} 
else {
    echo "0 results";
}
$conn->close();
?>
</table>
<a href = "dsjprereq.php"><p> Pre requistes for this subject </p> </a>

</html>