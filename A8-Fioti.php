<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <title>Hardware Online</title>
        <header>
            <h1 class = "topofthepage">
                Hardware Online <br>
            <small class="text-muted">America's Favorite Online Hardware Store</small>
            </h1>
        </header>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="#">Search our Website!</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                <a class="nav-link" href="homepage.html">Home(TODO)<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="AboutMe.html">About Us(TODO)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="TODO">Shop(TODO)</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="TODO">Login(TODO)</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
            </div>
        </nav>
<style>
table,  td  {  margin-right:auto;       margin-left: auto; 
border:2px solid black;  border-collapse:collapse;
 			     padding: 15px; text-align: left;}
             th  {  margin-right:auto; margin-left: auto; 
			     border:2px solid black;  border-collapse:collapse;
             }
</style>


        <center><h1>Admin Functions<h1>


<body>
<?php 

    echo "<table>
    <tr>
        <th>
        Tool
        </th>
        <th>
            Description
        </th>
    </tr>
    <tr>
        <td>Stock Tools</td>
        <td>Tools involving changing the stock of an item, it's price, etc.</td>
    </tr>
    <tr>
        <td>Employee Tools</td>
        <td>Allows you to edit employee roles, pay, etc.</td>
    </tr>
    <tr>
        <td>Records</td>
        <td>Sales records for the store, expense records, payroll.</td>
    </tr>
</table>"

?>
</body>

<?php include "08-footer.php"; ?>