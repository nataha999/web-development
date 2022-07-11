<?php
 function writeData()
 {
     $email=substr($_POST['email'],0, 250);
     $fileName=("data/$email.txt");
    if (file_exists($fileName))
    {
        $f = fopen($fileName,'r');
        $file = file($fileName);
        echo("<div class='output_text output_position'>");
        for ($i = 0;$i < 4;$i++)
        {
            echo("$file[$i]"."<br>");
        }
        fclose($f);
    }
    else {
        echo("<div class='output_text-eror output_position-eror'>");
        echo "Данного файла не существует";
        echo("</div>");
    }
 }

 echo ("<!DOCTYPE html>
          <html lang='ru'>
          <head>
            <link rel='stylesheet' type='text/css' href='css/index_style.css'>
          </head>
          <body>") ; 

 writeData();

 echo ("</body>");