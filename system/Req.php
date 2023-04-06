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
     
    if(isset($data["phonenumber"]) && isset($data["phonenumbers"]))
    {
     array_unshift($data["phonenumbers"], $data["phonenumber"]);
      
       unset($data["phonenumber"]);
    }
    
    if(isset($data["email"]) && isset($data["emails"]))
    {
     array_unshift($data["emails"], $data["email"]);
  
       unset($data["email"]);
    }
    return $data;
  }
  
  public static function ContactDetailsRequest()
  {
   if(isset($_GET["details"]))
    {
     return $_GET["details"];
    }
   return null;
  }
}

