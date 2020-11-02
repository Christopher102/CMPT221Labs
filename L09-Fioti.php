
<?php

echo "<h2> Lab 9 - C. Fioti</h2>";

include "connect_db.php";

$query = "SHOW TABLES;";

$r = mysqli_query ($dbc, $query);

if ($r)
    {echo "<br>Query success! Returning results....<br>";
    while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) 
    {explain_table($dbc, $row[0]);}; 
		} 		
   
function explain_table($dbc, $this_table)
{
    echo "<br> Table is $this_table";
    
    echo "<br> It's columns are: ";
        $q = "EXPLAIN $this_table;";
    $r = mysqli_query ($dbc, $q);

    if ($r) {
        while ($row = mysqli_fetch_array($r, MYSQLI_NUM))
        {
            echo "<br>$row[0]";
        }
    }
    echo "<br>";
}
?>