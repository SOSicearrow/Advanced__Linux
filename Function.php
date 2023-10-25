<?php
// include/function.php
function volume($length,$width,$height)
{
return $length * $width * $height;
}
function convertFtoC($fahr)
{
return round(($fahr - 32 / 1.8),1);
}
function convertCtoF($cent)
{
return ($cent * 1.8 + 32);
}
?>
2. Demonstrate these functions with the following script:
<?php
// test.php
include 'include/function.php'
echo 'Volume function:';
echo volume(4,5,6);
echo '</br></br>';
echo 'Fahrenheit to Centigrade:';
echo '</br>';
echo convertFtoC(15);
echo '</br>';
echo convertFtoC(33);
echo '</br></br>';
echo 'Centigrade to Fahrenheit:';
echo '</br>';
echo convertCtoF(20);
echo '</br>';
echo convertCtoF(10);
echo '</br></br>';
?>
