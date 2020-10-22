

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
?>