<!--------------------------------------------------------------
    Filename: db_connect.php 
	 Note: this file must not be visible to users! It has password information!
  V1.0  10/19/2020 AT Original program  
---------------------------------------------------------------->
<?php
  $dbc=mysqli_connect('127.0.0.1','mike','easysteps','site_db')
  OR die
      ( mysqli_connect_error());
		
  Echo "<br>Connected";
  
?>           
