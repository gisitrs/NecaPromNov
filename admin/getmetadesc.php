<?php 
    include"database.php";
    $propId  = $_POST['propId'];
    $sql = "SELECT * FROM vw_getallrepinformationsforedit WHERE id =".$propId;
    $result = $conn-> query($sql);
            
    if ($result-> num_rows > 0)
    {
        while ($row = $result-> fetch_assoc())
        {
            echo $row['metadesc'];
        }
    }
    else {
            echo "";
    }
            
    $conn-> close();
?>