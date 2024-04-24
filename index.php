
<?php 
$weight = $_GET['weight'];
$height = $_GET['height'];
$bmi = $weight / ($height * $height);
$bmi=round($bmi,2);
echo "Your BMI is $bmi\n";
if ($bmi < 18.5) {
  echo "<h1>You are underweight</h1>";
  echo "\n";
} else if ($bmi < 24.9) {
  echo "<h1>Perfect!</h1>";
  echo "\n";
} else if ($bmi < 29.9) {
  echo "<h1>You are overweight\n</h1>";
  echo "\n";
} else {
  echo "<h1>You are obese\n</h1>";
  echo "\n";
}

?>