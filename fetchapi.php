Below is an interactive list of names.
<br/>
The list should be able to:
<ul>
	<li>Sort (with proper number sort)</li>
	<li>Show index (starting with 1)</li>
	<li>... (to be continued)</li>
</ul>
<form>
	<select id='sortfilter' name='sort' ONCHANGE='fetchList()'>
		<option value=''>No Sort</option>
		<option value='1' selected>Sort Low to High</option>
		<option value='2'>Sort High to Low</option>
	</select>
</form>
<div id="listContainer"></div>
<script>
function fetchList() {
	var sort = document.getElementById("sortfilter").value;
	fetch("interactive-list.php?sort="+ sort).then(function(response) {
		// response.text() returns a promise that we chain on to read the text off the stream
	    response.text().then(function(text) {
	    	console.log(text);
	    	document.getElementById("listContainer").innerHTML = text;
		});
	}).catch(function(error) {
	    console.log(error);
	});
};

// initialize the list
fetchList();
</script>
