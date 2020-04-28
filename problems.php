<html>
<head>
	<title>Problems</title>
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
	<h2 class="aa_h2">Students Problemo!</h2>
</body>
</html>

<?php
	$con = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($con, 'student_registration') or die (mysqli_error('Error'));

	$sqlget = "SELECT * FROM queries";
	$sqldata = mysqli_query($con, $sqlget) or die ('Error 404');

	echo "<div class=\"aa_htmlTable\">";

	echo "<table>";
    echo "<tr><th>ID</th><th>First Name</th><th>Email</th><th>Problem</th>";

    while($row = mysqli_fetch_array($sqldata, MYSQLI_ASSOC)){
    	echo "<tr><td>";
    	echo $row['id'];
    	echo "</td><td>";
        echo $row['fname'];
        echo "</td><td>";
        echo $row['email'];
        echo "</td><td>";
       // echo "<tr><td>";
        echo $row['message'];
        echo "</td><td>";
        echo "<button name=\"resolve\"><a href='email.php?edit=$row[id]'>Resolve Issue</a></button>";
        echo "</td><td>";
        echo "<button name=\"delete\"><a href='delquery.php?del=$row[id]'>Delete Query</button>";
        echo "</td></tr>";
    }

    echo "</table>";
    echo "</div>";

?>
