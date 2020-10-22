<!DOCTYPE html>
<!--                      Sample Code to Convert to PHP
     10/06/2020 AT Original File 
--> 

<!-------------------------------- HTML Header   -----------------------------> 
<html lang="en">
<head>
<title> Our First PHP File 
</title>
<meta charset="utf-8"> 
 
 <style>
	table {background-color: darkseagreen;  color:black; 
	       border-collapse: collapse; border: 1px; 
		   font-family: arial; font-weight: normal;
		   margin-right: auto; margin-left: auto;
		   }
	th	  { background-color: grey;
			font-size: 17px; font-style: bold; 
		   }
	td	  { font-size: 15px;  padding-left: 5px;   padding-right: 5px;
		   }
	h1	  { color: blue; }	   
</style> 

</head>
<!-------------------------------- HTML Body    -----------------------------> 
<body>

<header> <h1> This file is now PHP!  </h1> </header>

<nav><hr>  
	 <!-- Nothing Here yet -->
	 <hr>
</nav>	

<main> 
<h2> A Sample Table  <h2>

<!-- Create a Table -->
<table border=1>
	<tr>
		<th> Column 1  </th>
		<th> Column 2 <th>
	</tr>
</table>
</main

<?php include "08-footer.php"; ?>
</body>
</html>