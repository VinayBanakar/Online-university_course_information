<!Doctype html>
<table border="1" id="table">

    <p> <tr><th bgcolor="#9999FF">Course</th></p>
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

$sql = "SELECT sem FROM semester where dep_id = 'CSE'";
$result = $conn->query($sql);
$array=array("cp","2a","3s","4d","5f","6f","7f","8f");
if ($result->num_rows > 0) {
    // output data of each row
    for ($i =0;$i<8;$i++){
    while($row = $result->fetch_assoc()) {
    	
      echo "<a href='$array[$i]'>"."<tr><td course: >". $row["sem"] . "</tr></td>"."</a>";
    }
}	
} else {
    echo "0 results";
}
$conn->close();
?>
</table>

</html>