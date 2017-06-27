Below is an interactive list of names.
<br/>
The list should be able to:
<ul>
	<li>Sort (with proper number sort)</li>
	<li>Show index (starting with 1)</li>
	<li>... (to be continued)</li>
</ul>
<form>
	<select id='sortfilter' name='sort' ONCHANGE='this.form.submit()'>
		<option value=''>No Sort</option>
		<option value='1'>Sort Low to High</option>
		<option value='2'>Sort High to Low</option>
	</select>
</form>
<?php
	$names = array("Sig", "Nikki", "Jack", "Nina", "Désìre", "Matchbox 20", "Matchbox 100");
	$sort=1;
	$sort=$_GET["sort"];
	$x=1;
	if($sort==1){
		sort($names, SORT_NATURAL | SORT_FLAG_CASE);
	}elseif($sort==2){
		rsort($names, SORT_NATURAL | Sort_FLAG_CASE);
	}
	foreach($names as $Key=>$Value){
		echo "$x: $Value<br>";
		$x++;
	}
?>
<script>
document.getElementById("sortfilter").value='<?php echo $_GET["sort"] ?>';
</script>
