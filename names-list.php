<?php
	$names = array("Sig", "Nikki", "Jack", "Nina", "Désìre", "Matchbox 20", "Matchbox 100");

	if(isset($_GET["sort"])){
		$sort=$_GET["sort"];
	}else{
		$sort=1;
	}

	if(isset($_GET["keyword"])){
		$Keyword=$_GET["keyword"];
	}else{
		$Keyword='';
	}

	$x=1;
	if($sort==1){
		sort($names, SORT_NATURAL | SORT_FLAG_CASE);
	}elseif($sort==2){
		rsort($names, SORT_NATURAL | SORT_FLAG_CASE);
	}
	foreach($names as $Key=>$Value){
		if($Keyword!='' AND $Value==$Keyword){
			echo "$x: $Value<br>";
			$x++;
		}else{
			echo "$x: $Value<br>";
			$x++;
		}
	}
?>
