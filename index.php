<?php
require_once 'vendor/autoload.php';
require_once 'system/model.php';
require_once 'system/begin.php';

error_reporting(E_ALL);
ini_set("display_errors", "On");


Model::Init();
/*Model::InsertContact([
    'firstname' => "Kovács",
    'lastname' => "Katalin",
    'email' => "katalin@mailhost.hu",
    'phonenumber' => "+36 30 1476674",
]);*/
/*$items = Model::SelectContacts();
foreach ($items as $itm)
{
 var_dump($itm ['firstname']);
 var_dump($itm ['lastname']);
 var_dump($itm['_id']->serialize());
 
}*/
/*
$id= 'a:1:{s:3:"oid";s:24:"641c85493e270f66e9068138";}';

$item = Model::GetContactByIdString($id);
var_dump($item ['firstname']);
var_dump($item ['lastname']);
 * */

 /*$id= 'a:1:{s:3:"oid";s:24:"641c85493e270f66e9068138";}';
 $item = Model::GetContactByIdString($id);
 $r = Model::UpdateContact($id, [
     'lastname' => "Katinka",
     'email' => "kovacskata@hotmail.com"
 ]);
var_dump($r);
  * 
  */

/*
$id= 'a:1:{s:3:"oid";s:24:"641c85493e270f66e9068138";}';
$r = Model::DeleteContactByIdString($idString);
 * 
 */