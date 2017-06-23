<?php
function euler($limit) {
	$sum = 0;
	for($x = 0; $x < $limit; $x++) {
		if($x % 3 === 0 || $x % 5 === 0) {
			$sum += $x;
		}
	}
	return $sum;
}
$limit = 1000;
$input = $_GET["limit"];
if(!empty($input)) {
	$limit = $input;
}
echo "The Euler value for limit $limit is: " . euler($limit);
?>

//Sigs way
/*
<?php 
$sum=0;
for ($x = 0; $x < 1000; $x++) {
    if ($x % 3  ==0 or $x % 5 ==0){
	$sum = $sum + $x;
	}
} 
echo $sum;
?>
*/