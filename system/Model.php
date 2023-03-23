<?php

class Model
{
 
 public static function Init()
 {
  
$uri = "mongodb://bogaromi:Medve756@ac-xffgdfx-shard-00-00.b0p6cng.mongodb.net:27017,ac-xffgdfx-shard-00-01.b0p6cng.mongodb.net:27017,ac-xffgdfx-shard-00-02.b0p6cng.mongodb.net:27017/?ssl=true&replicaSet=atlas-14hunp-shard-0&authSource=admin&retryWrites=true&w=majority";
$client = new MongoDB\Client($uri);
self::$db = $client->db_real_contact;
  
 }
 public static function InsertContact($contact)
 {
  $collection = self::$db->contacts;
  $collection->insertOne($contact);
 }
 public static function SelectContacts()
 {
  $collection = self::$db->contacts;
  
  $sort = ['firstname' => 1];
  $list = $collection->find([], ['sort' => $sort]);
  
  return $list->toArray();
 }
 public static function GetContactByIdString($idString)
 {
  $collection = self::$db->contacts;
  
  $filter = self::CreateFilterByIdString($idString);
  $item = $collection->find(['id' => $objectId]);
  return $item;
 }
 public static function UpdateContact($idString, $data)
 {
   $collection = self::$db->contacts;
    $filter = self::CreateFilterByIdString($idString);
   return $collection->updateOne($filter, ['$set' => $data]);
 }
 
  public static function DeleteContactByIdString($idString)
  {
   $collection = self::$db->contacts;
   
   $filter = self::CreateFilterByIdString($idString);
   return $collection->deleteOne($filter);
   
  }
  
 private static function CreateFilterByIdString($idString) 
 {
  $objectId = new MongoDB\BSON\ObjectId();
  $objectId->unserialize($idString);
  $filter = ['_id' => $objectId];
  
  return $filter;
 
 }
 
  private static $db;
}
