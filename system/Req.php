<?php

class Req
{
  public static function NewContactSubmitted()
  {
   return isset($_POST["newSent"]);
  }
  public static function GetContactPostData()
  {
    $data = [];
    
    foreach ($_POST as $key => $value)
    {
     if(!empty($value))
     {
      $data[$key] = $value;
     }
     
     
    }
    
    return $data;
  }
}

