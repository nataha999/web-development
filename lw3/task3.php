<?php

  header('Content-Type: text/plain');

  function PasswordStrength(string $password): int
  {
      $lenPassword = strlen($password);
      $strength = 0;
      $countNum = 0;
      $countUpperCaseChars = 0;
      $countLowerCaseChars = 0;

      for ($i = 0; $i < $lenPassword; $i++)
      {
          if (is_numeric($password[$i]))
          {
              $countNum++;
          }    
          if (ctype_upper($password[$i]))
          {
              $countUpperCaseChars++;
          }
          if (ctype_lower($password[$i])) 
          {
              $countLowerCaseChars++;
          }
      }
  
      if ($lenPassword !== 0)
      {
          $strength = $lenPassword * 4; //прибавл€ем количество символов * 4
      }
      if ($countNum !== 0)
      {
          $strength += $countNum * 4; //прибавл€ем количество цифр * 4
      }
      if ($countUpperCaseChars !== 0)
      {
          if (!ctype_upper($password))
          {
              $strength += ($lenPassword - $countUpperCaseChars) * 2; //прибавл€ем количество символов - кол-во символов в верхнем регистре * 2
          }
      }
      if ($countLowerCaseChars !== 0)
      {
          if(!ctype_lower($password))
          {
              $strength += ($lenPassword - $countLowerCaseChars) * 2; //прибавл€ем количество символов - кол-во в ниж рег * 2
          }
      }
      if (ctype_alpha($password))
      {
          $strength -= $lenPassword; //если все буквы, то вычитаем кол-во символов
      }
      if (is_numeric($password))
      {
          $strength -= $lenPassword; //если все цифры, то вычитаем кол-во символов
      }
      foreach (count_chars($password, 1) as $i => $value) 
      {
          if ($value !== 1)    
          {
              $strength -= $value; //вычитаем кол-во повтор€ющихс€ символов
          }
      }
      return $strength;
  }
 
  $text = $_GET['password'];
  if (!empty($text))
  {
     echo PasswordStrength($text);
  }
  else
  {
      echo '¬ведите данные';
  }