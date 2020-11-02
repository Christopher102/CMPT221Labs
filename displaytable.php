<?php

require "connect_db.php";

$table = "T3_users";

$q = "SELECT * FROM $table";

$r = mysqli_query ($dbc, $q);


echo "<table border=1> <th>Name> <th>Password</th> <th>Hashtype</th> <th>Rank ID</th> <th>Active</th>";

if ($r) 
{ echo "<br>Query Successful!";
echo "<br> Showing $table: " ;
while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
echo "<br> <tr> <td>$row[0]</td> <td>$row[1]</td>". 
                    "<td>$row[2]</td> <td>$row[3]</td><td>$row[4]</td></tr>";
} 

echo "</table>";
}
else {
    echo "<br>Query Unsuccessful!";
}		
?>