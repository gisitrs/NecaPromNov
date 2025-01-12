<?php
include"database.php"; 
$proId  = $_POST['proId'];
$txtref = $_POST['txtref']; 
$txtname  = $_POST['txtname'];
$txtprice  = $_POST['txtprice'];
$txtaddress  = $_POST['txtaddress'];
$txtsmalldescription  = $_POST['txtsmalldescription'];
$txtmetadesc  = $_POST['txtmetadesc'];

if ($txtname==''){
 echo "<p class='btn btn-info' align='center'>Please Insert YOUr name</p>";
}else{
 $sql = "UPDATE jos_osrs_properties 
 SET pro_name='$txtname', 
     ref='$txtref', 
     price='$txtprice', 
     address='$txtaddress', 
     pro_small_desc='$txtsmalldescription',
     metadesc='$txtmetadesc'
 WHERE id = '$proId' ";
 
 if ($conn->query($sql) === TRUE) {
  echo "Record updated successfully";
 } else {
  echo "Error updating record: " . $conn->error;
 } 
}
?>