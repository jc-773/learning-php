<?php
$nums_array = [1, 2, 3, 4, 5];
$sum_of_array = array_sum($nums_array);
$count_of_array = count($nums_array);

$colors = ["Red", "Blue", "Green"];
$reversed_colors = array_reverse($colors);
$colors[] = "Purple";
$colors[1] = "Pink";
//array_pop($colors);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Basic PHP demo</title>
</head>

<body>
    <div id="1">
        <pre>
        <!-- <?= "The sum of the {$count_of_array} numbers is: {$sum_of_array}"  ?> -->
         <?= print_r($colors) ?>
        </pre>
    </div>
</body>

</html>