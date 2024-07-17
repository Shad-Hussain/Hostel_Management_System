<?php
$username='root';
$server= 'localhost';
$password="";
$db='adminpanel';


$con= mysqli_connect($server,$username,$password,$db);
if($con){
//echo "Connection successful";
?>

<script>
	alert("Connection successful");
</script>


<?php
}else{

	echo "connection not successful";
	die("No connection".mysql_connect_error());
	
}
?>