<!DOCTYPE html>
<html lang="en">
<head>  
  <title>Admin Page</title>
  	<meta charset="utf-8">
  		<meta name="viewport" content="width=device-width, initial-scale=1">
  		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    	<style type="text/css">
    	@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,600,400italic);
body{
  display: table;
  width: 100%;
  background: #dedede;
  text-align: center;
  font-family: Roboto;
}
*{ 
  -webkit-box-sizing: border-box; /* Safari/Chrome, other WebKit */
  -moz-box-sizing: border-box;    /* Firefox, other Gecko */
  box-sizing: border-box;         /* Opera/IE 8+ */
}

.aa_h2{
  font:50 3rem/1 Roboto;
  text-transform: uppercase;
  background: #109f67;
}
table{
   background: #fff;
}
table,thead,tbody,tfoot,tr, td,th{
  text-align: center;
  margin: auto;
  border:1px solid #dedede;
  padding: 1rem;
  width: 50%;
}
.table    { display: table; width: 50%; }
.tr       { display: table-row;  }
.thead    { display: table-header-group }
.tbody    { display: table-row-group }
.tfoot    { display: table-footer-group }
.col      { display: table-column }
.colgroup { display: table-column-group }
.td, .th   { display: table-cell; width: 50%; }
.caption  { display: table-caption }

.table,
.thead,
.tbody,
.tfoot,
.tr,
.td,
.th{
  text-align: center;
  margin: auto;
  padding: 1rem;
}
.table{
  background: #fff;
  margin: auto;
  border:none;
  padding: 0;
  margin-bottom: 5rem;
}

.th{
  font-weight: 700;
  border:1px solid #dedede;
  &:nth-child(odd){
    border-right:none;
  }
}
.td{
  font-weight: 300;
  border:1px solid #dedede;
  border-top:none;
  &:nth-child(odd){
    border-right:none;
  }
}

.aa_htmlTable{
  background: #109f67;
  padding: 5rem;
  display: table;
  width: 100%;
  height: 100vh;
  vertical-align: middle;
}
       
    	</style>
    
</head>
<body>

	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<ul class="navbar-nav mr-auto">
			<li class="nav-item">
        		<a class="nav-link" href="problems.php">Show Problems</a>
      		</li>
		</ul>

    <form class="form-inline my-2 my-lg-0">
      <a href="admin.html">Logout</a>

    </form>
  </div>
</nav>
	<h3 class="aa_h2">Admin's Corner</h3>
   <!-- <div class="aa_htmlTable">
  <h2 class="aa_h2">HTML Table</h2>
  <table>
    <thead>
      <tr>
        <th>Month</th>
        <th>Savings</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td>January</td>
        <td>$100</td>
      </tr>
      <tr>
        <td>February</td>
        <td>$80</td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <td>Sum</td>
        <td>$180</td>
      </tr>
    </tfoot>
  </table>
</div> -->



<?php
	
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'student_registration') or die (mysqli_error('Error'));

	$sqlget = "SELECT * FROM students";
	$sqldata = mysqli_query($con, $sqlget) or die ('Error 404');

	echo "<div class=\"aa_htmlTable\">";

	echo "<table>";
    echo "<tr><th>ID</th><th>First Name</th><th>Last Name</th><th>Roll number</th><th>Email ID</th><th>Gender</th><th>State</th><th>City</th></tr>";

    while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    	echo "<tr><td>";
    	echo $row['id'];
    	echo "</td><td>";
        echo $row['fname'];
        echo "</td><td>";
        echo $row['lname'];
        echo "</td><td>";
       // echo "<tr><td>";
        echo $row['rollno'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
        //echo "<tr><td>";
        echo $row['gender'];
        echo "</td><td>";
        echo $row['state'];
        echo "</td><td>";
         //echo "<tr><td>";
        echo $row['city'];
        echo "</td><td>";
        echo "<button name=\"delete\"><a href='delete.php?del=$row[id]'>Delete</a></button>";
        echo "</td><td>";
        echo "<button name=\"edit\"><a href='edit.php?edit=$row[id]'>Edit</a></button>";
        echo "</td></tr>";
    }

    echo "</table>";
    echo "</div>";

?>

    
</body>
    
</html>

