<?php
     include "admin/database.php";
     $sql = "SELECT * FROM vw_getmaxprice";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo "<input type="."range"." name="."min_objsf_val"." class="."min-val-sf2"." min="."0"." max=".$row["max_object_square_feet"]." value="."50"." step="."5"." oninput="."slideMinSF2()".">".
                 "<input type="."range"." name="."max_objsf_val"." class="."max-val-sf2"." min="."0"." max=".$row["max_object_square_feet"]." value="."800"." step="."5"." oninput="."slideMaxSF2()".">";
        }
     }
     else {
            echo "0 results";
     }
                      
     //$conn-> close();
?>