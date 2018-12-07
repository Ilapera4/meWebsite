<!DOCTYPE html>
<html lang="en">
<head>
<title>MySQL: add a row and query</title>
</head>

<body>


<?php 
$link = mysql_connect('stewcraw.dotstermysql.com', 'prof', '3632password'); 
if (!$link) { 
    die('Could not connect: ' . mysql_error()); 
} 
echo 'Connected successfully<br>'; 
mysql_select_db(iokepa_f18); 

/*if ( mysql_query("DROP TABLE testExample") )
	{ echo "table dropped<br>";}

if ( mysql_query("CREATE TABLE testExample (name VARCHAR(20))" ) )
	{ echo "created<br>";}
else
	{ echo "create failed<br>";}*/

//-----------------------------------------
if(isset($_POST['submit'])){
$name = $_POST['name'];
$age = $_POST['age'];
$species = $_POST['species'];
//-----------------------------------------

mysql_query("INSERT INTO testExample(Name, Age, Species) VALUES('$name', '$age', '$species');");
//mysql_query("INSERT INTO testExample VALUES('DrC');");
$result = mysql_query("SELECT * FROM testExample;");

// $result is a sequence of rows, each row is an array of fields of the output
while ($row = mysql_fetch_row($result)){
	echo $row[0] .' '. $row[1] .' '. $row[2].' '. $row[3].' '. $row[4] . '<br>';
}
}
?> 
<script>
document.getElementById("")
</script>
</body>
</html>