<?php

  header('Content-Type: text/plain');

  $tempString = $_GET['identifier'];
  $flag = true;

  if ((is_numeric($tempString[0])) || (empty($tempString)))
  {
    echo 'no';
    $flag = false;
  }
  else
  {
    while (!(empty($tempString)))
    {
      if ((is_numeric($tempString[0])) || (ctype_alpha($tempString[0])))
      {
        $tempString = substr($tempString, 1); //возвращаем подстроку с 1 позиции
      }
      else
      {
        echo 'no, the string is not an identifier';
        $tempString = '';
        $flag = false;
      }
    } 
  }
  if ($flag) 
  {
    echo 'yes';
  }

?>