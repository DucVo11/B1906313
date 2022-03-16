<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "qlsv";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//tao chuoi luu cau lenh sql
$sql = "SELECT * FROM student";
//thuc thi cau lenh sql va dua doi tuong vao $result
$result = $conn->query($sql);

  
  
	// print_r ($result);
	// echo '<br>';
	// echo '<br>';
	
  
  $result = $conn->query($sql);
 
  $result_all = $result -> fetch_all();
 
?>
<label for="cars">Chon sinh vien:</label>
<select id="cars">

<?php 
  foreach ($result_all as $row) {

?>
 <option value="
 <?php    echo $row[0]; ?> "> <?php echo $row[1]; ?> 
 </option>
 <?php 
  }
 
?> 
 </select>
<?php 
$conn->close();
?>
