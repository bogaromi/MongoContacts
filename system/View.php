<?php
 class View 
 {
  public static function ShowContacts($item)
  {
   echo '<section class="p-4 bg-white shadow mb-4">';
   echo '<table class="table table-striped table-hover">';
   echo '<thead><tr>';
   echo '<th>Megnevezés</th><th>E-mail</th><th>Telefon</th><th> </th>';
   echo '</tr></thead><tbody>';
   
   foreach ($item as $obj)
   {
    $name = "";
    if(isset($obj['firstname']))
    {
     $name = $obj['firstname'];
    }
    if(isset($obj['lastname']))
    {
     if($name)
      {      
       $name .=" ";     
      }
     $name .= $obj['lastname'];
    }
    
    $email = "-";
    if(isset($obj['email']))
    {    
     $email = $obj['email'];
    }
    
    $phone = "-";
    if(isset($obj['phonenumber']))
    {    
     $phone = $obj['phonenumber'];
    }
     $id = $obj['_id']->serialize();
     
    echo '<tr>';
    echo '<td>'. $name .'</td>';
    echo '<td>'. $email . '</td>';
    echo '<td>'. $phone . '</td>';
    echo '<td><a href=\'?details='. $id .'\' class="h5" title="Részletek"><i class="fa-solid fa-file-lines"></i></a></td>';
    echo '</tr>';
   }
   
   echo '</tbody></table>';
   echo '</section>';
  }
  public static function CreationForm()
  {
     echo '<section class="p-4 bg-white shadow mb-4">';
     echo '<h3 class="mb-4">Új kapcsolat hozzáadása</h3>';
     echo '<form method="post" action="">';
     
     echo self::CreateInput("Vezetéknév", "firstname");
     echo self::CreateInput("Keresztnév", "lastname");
     echo self::CreateInput("E-mail", "email");
     echo self::CreateInput("Telefon", "phonenumber");
     
     echo'<button class="btn btn-primary" name="newSent" action="index.php"><i class="fa-solid fa-check"></i>Kapcsolat létrehozása</button>';
     
     echo '</form>';
     echo '</section>';
  }
  private static function CreateInput($text, $name) 
  {
    $html = '<div class="mb-3">';
    $html .= ('<label for="'. $name .'" class="form-label">'. $text .'</label>');
    $html .= ('<input type="text" name="'. $name .'" id="'. $name .'" class="form-control">');
    $html .= '</div>';
    
    return $html;
  }
  
  public static function ShowDetails($contact)
  {  //var_dump($contact);
        echo '<section class="p-4 bg-white shadow mb-4">';
		echo '<h3 class="mb-4">Részletes adatok</h3>';
		echo '<table class="table"><tbody>';
		
		echo self::DetailsItem("Vezetéknév", $contact, "firstname");
		echo self::DetailsItem("Keresztnév", $contact, "lastname");
		echo self::DetailsItem("E-mail", $contact, "email");
		echo self::DetailsItem("Telefonszám", $contact, "phonenumber");
		
		echo '</tbody></table>';
		echo '</section>';
  }
  
   private static function DetailsItem($title, $contact, $key) 
   {
        $html = '';
        if(isset($contact[$key]))
        {
         $html .= '<tr><td><strong>'. $title .'</strong></td>';
         $html .= '<td class="display-6">'. $contact[$key] .'</td></tr>';
        }
        
        
        return $html;
   }
  
 }

