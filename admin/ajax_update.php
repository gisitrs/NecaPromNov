<?php
include"database.php"; 
$string  = $_POST['string'];
$txtname  = $_POST['txtname'];
$txtdepartment  = $_POST['txtdepartment'];
$txtphone  = $_POST['txtphone'];

//echo "<p class='btn btn-info' align='center'>Id = ".$string." druga =".$txtdepartment."</p>";

if ($txtname==''){
 echo "<p class='btn btn-info' align='center'>Please Insert YOUr name</p>";
}else{
 $sql = "UPDATE marinkom_jos1.jos_osrs_properties SET pro_name='$txtdepartment' WHERE id = '$string' ";
 if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
 } else {
  echo "Error updating record: " . $conn->error;
 } 
}
?>