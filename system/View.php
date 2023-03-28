<?php
 class View 
 {
  public static function ShowContacts($item)
  {
   echo '<section class="p-4 bg-white shadow mb-4">';
   echo '<table class="table table-striped table-hover">';
   echo '<thead><tr>';
   echo '<th>Megnevezés</th><th>E-mail</th><th>Telefon</th>';
   echo '</tr></thead><tbody>';
   
   foreach ($item as $obj)
   {
    echo '<tr>';
    echo '<td>'. $obj['firstname']. ' ' . $obj['lastname']. '</td>';
    echo '<td>'. $obj['email']. '</td>';
    echo '<td>'. $obj['phonenumber']. '</td>';
    echo '</tr>';
   }
   
   echo '</tbody></table>';
   echo '</section>';
  }
  
 }

