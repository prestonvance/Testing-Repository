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
		<option value='1' selected>Sort Low to High</option>
		<option value='2'>Sort High to Low</option>
	</select>
</form>
<?php
	$names = array("Sig", "Nikki", "Jack", "Nina", "Désìre", "Matchbox 20", "Matchbox 100");
	if(isset($_GET["sort"])){
		$sort=$_GET["sort"];
		?>
		<script>
		document.getElementById("sortfilter").value='<?php echo $_GET["sort"] ?>';
		</script>
		<?php
	}else{
		$sort=1;
	}
	$x=1;
	if($sort==1){
		sort($names, SORT_NATURAL | SORT_FLAG_CASE);
	}elseif($sort==2){
		rsort($names, SORT_NATURAL | SORT_FLAG_CASE);
	}
	foreach($names as $Key=>$Value){
		echo "$x: $Value<br>";
		$x++;
	}
?>

Output can be seen at http://hysteriamachinesentertainment.com/php-test
