<!Doctype html>
<table border="1" id="table">

    <p> <tr><th bgcolor="#9999FF">HYDROLICS AND MACHINARY</th><th bgcolor="#9999FF">course name</th><th bgcolor="#9999FF">course info</th></tr>
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

$sql = "SELECT course_name,course_info FROM course where course_id = '4CV_HMT' ";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    	
        echo "<tr><td>"."<td unitn>". $row["course_name"] ."</td>"."<td chap>".$row["course_info"]."</td></tr>";
    }
} 
else {
    echo "0 results";
}
$conn->close();
?>
</table>
<a href = "hmtprereq.php"><p> Pre requistes for this subject </p> </a>

</html>