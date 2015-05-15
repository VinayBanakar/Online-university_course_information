<!Doctype html>
<table border="1" id="table">

    <p> <tr><th bgcolor="#9999FF">SPECIAL TPOIC</th><th bgcolor="#9999FF">special topic name</th><th bgcolor="#9999FF">topic info</th></tr>
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

$sql = "SELECT topic_name, topic_info FROM special_topic where sem = '3'and dep_id='CSE'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo "<tr><td>"."<td unitn>". $row["topic_name"]."</td><td>".$row["topic_info"]."</td>"."</tr></td>";
    }
} 
else {
    echo "0 results";
}
$conn->close();
?>
</table>
<a href = "laprereq.php"><p> Pre requistes for this subject </p> </a>

</html>