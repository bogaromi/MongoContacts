<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");

require_once 'vendor/autoload.php';
require_once 'system/Req.php';
require_once 'system/Model.php';
require_once 'system/View.php';
require_once 'system/views/begin.php';

Model::Init();

$details = Req::ContactDetailsRequest();
if($details)
{
  $details = Model::GetContactByIdString($details);
  View::ShowDetails($details);
}

if(Req::NewContactSubmitted())
{
  $contact = Req::GetContactPostData();
  Model::InsertContact($contact);
}

View::CreationForm();

$contacts = Model::SelectContacts();
View::ShowContacts($contacts);

require_once 'system/views/end.php';