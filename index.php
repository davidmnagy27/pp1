<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Pair Program 1</title>
</head>
<body>
<h3>Pair Program 1</h3>
</body>
</html>

<?php
$numbers = array( 7, 9, 8, 9, 8, 8, 6 );
foreach( $numbers as $value ) {
    echo "$value <br />";
}

echo max(array( 7, 9, 8, 9, 8, 8, 6));

$average = array_sum($numbers) / count($numbers);
echo $average;

$num_unique = array_unique($numbers);
print_r($num_unique);

$numbers = array(7, 9, 8, 9, 8, 8, 6);
$counts = array_count_values($numbers);
echo "number 6 has $counts[6] <br>";
echo $counts[7];
echo $counts[8];
echo $counts[9];

