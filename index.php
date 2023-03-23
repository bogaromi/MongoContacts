<?php
error_reporting(E_ALL);
ini_set("display_errors", "On");

require_once 'vendor/autoload.php';
require_once 'system/model.php';
require_once 'system/view.php';
require_once 'system/views/begin.php';

Model::Init();

$contacts = Model::SelectContacts();
View::ShowContacts($contacts);

require_once 'system/views/end.php';