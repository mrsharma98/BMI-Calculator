<?php
$height = $_REQUEST["ht"];
$weight = $_REQUEST["wt"];


$heightInMs = $height/100;
$bmi = ($weight/($heightInMs*$heightInMs));

$message = "";

if($bmi<18.5){
    $message = "You are underweight.";
}
else if($bmi>=18.5 && $bmi<=24.9)
{
    $message = "Congrats!!! You have normal weight!";
}
else if($bmi>24.5 && $bmi<=29.9)
{
    $message = "You are overweight.";
}
else
{
    $message = "Be careful!!! You are obese.";
}

$output = array(
    "bmi"=>$bmi,
    "message"=>$message
);

echo json_encode($output);
?>
