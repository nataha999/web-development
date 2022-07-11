<?php
function getPOSTParameter(string $name): ?string
{
    return isset($_POST[$name]) ? $_POST[$name] : null;
}
$email = getPOSTParameter('email');
$name = getPOSTParameter('name');
$activity = getPOSTParameter('activity');
$agreement = getPOSTParameter('agreement');
if ($email)
{
    $path = './data/' . $email . '.txt';
    $myFile = fopen($path, "w");
    $somecontent =  "Email: " . $email . PHP_EOL . "Имя: " . $name . PHP_EOL . "Деятельность: " . $activity . PHP_EOL ;
    fwrite($myFile, $somecontent);
    fclose($myFile);
}
else
{
    echo "Don't got email!";
}