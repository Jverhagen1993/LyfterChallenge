<?php
$fizz = 3;
$buzz = 5;

echo "Invoer:<br>";
echo "<b>"."Fizz = " . $fizz . " | Buzz = " . $buzz . "</br></b>";
echo "<br>laatste reeks cijfers:<br>";

for ($i = 1; $i <= 100; $i++){
    $cijfers = '';

    if ($i % $fizz == 0){
        $cijfers .= 'Fizz';
    }
	
    if ($i % $buzz == 0){
        $cijfers .= 'Buzz';
    }
	
    if (!$cijfers){
        $cijfers = $i;
    }
	
    echo $cijfers . "<br/>";
	
}
?>