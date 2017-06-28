<?php
	$servername = "someserverhost";
	$username = "root";
	$password = "********";
	$dbname = "friendsnamedb";

	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	
	if(isset($_GET["sort"])){
		$sort=$_GET["sort"];
	}else{
		$sort=1;
	}
	if(isset($_GET["keyword"])){
		$Keyword=strtolower($_GET["keyword"]);
		$query1=" WHERE name LIKE '%$Keyword%'";
	}else{
		$query1='';
	}
	
	if($sort==1){
		$query2=" ORDER BY name ASC";
	}elseif($sort==2){
		$query2=" ORDER BY name DESC";
	}else{
		$query2='';
	}
	
	$sql="SELECT * FROM names $query1 $query2";
	$result=$conn->query($sql);
	while($row=$result->fetch_assoc()){
	//assuming the table names has theses columns ID=RecID and Name=Name
		$ID=$row["RecID"];
		$Name=$row["Name"]
		echo "$ID: $Name <br>";
	
	}
	$conn->close();
?>
