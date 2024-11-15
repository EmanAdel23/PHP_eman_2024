<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chessboard</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 100px ;
        }
        td {
            width: 50px;
            height: 50px;
        }
        .black {
            background-color: black;
        }
        .white {
            background-color: white;
        }
    </style>
</head>
<body>
<table>
<?php
    for ($row = 0; $row < 8; $row++) {
        for ($col = 0; $col < 8; $col++) {
            if (($row + $col) % 2 == 0) {
                $color = "white";
            } else {
                $color = "black";
            }
            echo "<td class='$color'></td>";
        }
        echo "</tr>";
    }
?>
</table>
</body>
</html>

<?php 

$rows = 5; 
 
for ($i = 1; $i <= $rows; $i++) { 
    for ($j = 1; $j <= $rows - $i; $j++) { 
        echo "&nbsp;&nbsp;"; 
    } 
    for ($k = 1; $k <= $i; $k++) { 
        echo "*&nbsp; &nbsp;"; 
    } 
    echo "<br>"; 
} 
 
for ($i = $rows - 1; $i >= 1; $i--) { 
    for ($j = 1; $j <= $rows - $i; $j++) { 
        echo "&nbsp;&nbsp;"; 
    } 
    for ($k = 1; $k <= $i; $k++) { 
        echo "*&nbsp; &nbsp;"; 
    } 
    echo "<br>"; 
} 
echo "<hr>"; 
?>


<?php
$size = 5;
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat(" *", $i) . "<br>";

}
echo str_repeat(" *", $size) . "<br>";
for ($i = $size - 1; $i >= 1; $i--) {
    echo str_repeat(" *", $i) . "<br>";
    
}

echo"<hr>";
?>
<?php
$size = 3;
for ($i = 1; $i <= $size; $i++) {
    echo str_repeat(" *", 2 * $i - 1);
    echo "<br>";
}
for ($i = $size - 1; $i >= 1; $i--) {
    echo str_repeat(" *", 2 * $i - 1);
    echo "<br>";
}
echo"<hr>";
?> 


<?php
$array = [2,4,3,1,6,7,5,8,0,9] ;
$n = count($array);
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($array[$j] > $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}
echo " ASC: ";
echo"<br>";
print_r($array);

echo"<br>";
for ($i = 0; $i < $n - 1; $i++) {
    for ($j = 0; $j < $n - $i - 1; $j++) {
        if ($array[$j] < $array[$j + 1]) {
            $temp = $array[$j];
            $array[$j] = $array[$j + 1];
            $array[$j + 1] = $temp;
        }
    }
}
echo " DESC: ";
echo"<br>";
print_r($array);
echo"<hr>";
?>

<?php
$array =[2,4,3,1,6,7,5,8,0,9];
$sum = 0;
$count = count($array);
for($i=0;$i<$count;$i++) {
    $sum += $array[$i];
}
if ($count > 0) {
    $average = $sum / $count;
    echo "The avg : " . $average;
} else {
    echo "The array is empty";
}
echo"<hr>";
?>

<?php
$array = [1,2,3,4,5,6,7,8,9,10];
$filteredArray = [];
for($i=0;$i<count($array);$i++) {
    if ($array[$i] % 2 == 0) {
        continue; 
    }
    $filteredArray[] = $array[$i];
}
echo"Array after removing even numbers:<br>";
print_r($filteredArray);
echo"<hr>";
?>


<?php
$numbers = [10, 30, 20];
$max = $numbers[0];
if ($numbers[1] > $max) {
    $max = $numbers[1];
}

if ($numbers[2] > $max) {
    $max = $numbers[2];
}
echo "The maximum number is: " . $max . "<br>";
echo"<hr>";

?>
  
  <?php
$date = '2012-12-21';
$dateObject = new DateTime($date);
$dateObject->modify('+1 month');
$newDate = $dateObject->format('Y-m-d');
echo "Original Date: " . $date . "<br>";
echo "Date After One Month: " . $newDate . "<br>";
echo"<hr>";

?>


<?php
$currentMonth = date('n');
$previousMonth = $currentMonth - 1;
if ($previousMonth == 0) {
    $previousMonth = 12;
}
echo "The previous month number is: " . $previousMonth . "<br>";
echo"<hr>";

?>


<?php
$mainString = " welcome to the world of PHP!";
$searchString = "world";
if (preg_match("/$searchString/", $mainString)) {
    echo "The string '$searchString' was found in the main string.";
} else {
    echo "The string '$searchString' was not found in the main string.";
}
echo"<hr>";

?>


<?php
function isPrime($number) {
    if ($number <= 1) {
        return false; 
    }

    for ($i = 2; $i <= sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false; 
        }
    }

    return true; 
}

$testNumber = 29; 

if (isPrime($testNumber)) {
    echo "$testNumber is a prime number.";
} else {
    echo "$testNumber is not a prime number.";
}
echo"<hr>";

?>

<?php

if (isset($_POST['color'])) {
    
    setcookie('backgroundColor', $_POST['color'], time() + (30 * 24 * 60 * 60), '/');
}

$backgroundColor = isset($_COOKIE['backgroundColor']) ? $_COOKIE['backgroundColor'] : 'white';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Background Color</title>
    <style>
        body {
            background-color: <?php echo $backgroundColor; ?>;
            color: black;
            font-family: Arial, sans-serif;
            
            padding: 50px;
        }
    </style>
</head>
<body>

<h1>Choose a Background Color</h1>

<form method="POST" action="">
    <label for="color">Select Color:</label>
    <select name="color" id="color">
        <option value="white" <?php if ($backgroundColor == 'white') echo 'selected'; ?>>White</option>
        <option value="lightblue" <?php if ($backgroundColor == 'lightblue') echo 'selected'; ?>>Light Blue</option>
        <option value="lightgreen" <?php if ($backgroundColor == 'lightgreen') echo 'selected'; ?>>Light Green</option>
        <option value="lightyellow" <?php if ($backgroundColor == 'lightyellow') echo 'selected'; ?>>Light Yellow</option>
        <option value="lightgray" <?php if ($backgroundColor == 'lightgray') echo 'selected'; ?>>Light Gray</option>
    </select>
    <button type="submit">Change Color</button>
</form>

</body>
</html>

