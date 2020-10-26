

<?php


echo "<b><br> Exercise 9 - C. Fioti </b><br>";
echo "<br> Step 1: ";
$body_temp=98.6;
echo $body_temp;

echo "<br> Step 2: ";

if ($body_temp==100) {
    echo "Match!";
}


echo "<br> Step 3: Concatenation!";
$fname="Chris";
$lname="Fioti";
echo "<br> - ". $fname ." ". $lname;
echo "<br> - $fname $lname in double quotes";
echo '<br> - $fname $lname in double quotes';
echo '<br> My Name is "Chris Fioti"';

echo "<br> Step 4: Arrays";
$months[]= 'January';
$months[]= 'Feburary';
$months[]= 'March';
echo "<br> 0 - $months[0]";
echo "<br> 1 - $months[1]";
echo "<br> 2 - $months[2]";
echo "<br> <br>";
# OR
echo "<br> OR";
echo "<br> <br>";

echo "<br> Step 5: Arrays";
$months2['jan']= 'January';
$months2['feb']= 'Feburary';
$months2['mar']= 'March';
echo "<br> 0 - ".$months2['jan'];
echo "<br> 1 - ".$months2['feb'];
echo "<br> 2 - ".$months2['mar'];

echo "<br>";
echo "<br> Step 6: SQL Array";
require "connect_db.php";

$table = "PRINTS";

$q = "SELECT * FROM $table";

$i = 'INSERT INTO PRINTS(id, name, artist, price) 
        VALUES
        (0, "American Dream", "Fall Out Boy", 9.99),
        (1, "Virus", "Shaken Sin", 15.99);';
$r = mysqli_query ($dbc, $q);


echo "<table border=1> <th>Number</th> <th>Name</th> <th>Artist</th> <th>Price</th>";

if ($r) 
{ echo "<br>Query Successful!";
echo "<br> Showing $table: " ;
while ($row = mysqli_fetch_array( $r, MYSQLI_NUM)) {
echo "<br> <tr> <td>$row[0]</td> <td>$row[1]</td>". 
                    "<td>$row[2]</td> <td>$row[3]</td></tr>";
} 

echo "</table>";
}
else {
    echo "<br>Query Unsuccessful!";
}		
?>