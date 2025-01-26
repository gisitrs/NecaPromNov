<?php
     include "admin/database.php";
     $sql = "SELECT * FROM vw_getmaxprice";
     $result = $conn-> query($sql);
                      
     if ($result-> num_rows > 0)
     {
        while ($row = $result-> fetch_assoc())
        {
            echo "<input type="."range"." name="."min_val"." class="."min-val"." min="."0"." max=".$row["max_price"]." value="."10000"." step="."1000"." oninput="."slideMin()".">".
                 "<input type="."range"." name="."max_val"." class="."max-val"." min="."0"." max=".$row["max_price"]." value="."350000"." step="."1000"." oninput="."slideMax()".">";
        }
     }
     else {
            echo "0 results";
     }
                      
     //$conn-> close();
?>