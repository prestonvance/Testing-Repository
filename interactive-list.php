Below is an interactive list of names.
<br/>
The list should be able to:
<ul>
	<li>Sort (with proper number sort)</li>
	<li>Show index (starting with 1)</li>
	<li>... (to be continued)</li>
</ul>

<?php
	$names = array("Sig", "Nikki", "Jack", "Nina", "Désìre", "Matchbox 20", "Matchbox 100");
	$sort=1;
	$x=1;

	if($sort==1){
		sort($names);
	}
	foreach($names as $Key=>$Value){
		echo "$x: $Value<br>";
		$x++;
	}
?>
