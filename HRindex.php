<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
   <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<?php

	$host = "localhost";
	$dbUser = "root";
	$password = "";
	$database = "hr";

	$dbConn = new mysqli($host,$dbUser,$password,$database);
	if($dbConn->connect_error)
	{
		die("Database Connection Error, Error No.: ".$dbConn->connect_errno." | ".$dbConn->connect_error);
	}
	$id = null;
	if ( !empty($_GET['id'])) {
			$id = $_REQUEST['id'];
	}

	 ?>
	 <script>
	 	$(document).ready(function(){

	 		$.ajax({
	 			url: 'get_data.php',
	 			success: function(data){

	 				$("#Request-data").html(data);
	 			}
	 		})
	 	});




	 </script>
<style>


.container{
	width:1120px;
	margin:0 auto;
	border:1px solid #eeeeee;
	background:#ffffff;
	padding:10px;
}

h1{
	text-align:center;
	font-size:20px;

}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}

</style>
</head>
<body>

<div class="container">
	<h1>Requests</h1>
</div>
	<div id="Request-data">
	</div>



</body>
</html>
