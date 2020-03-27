<?php
use application\core\Router;
ini_set('display_errors', 0);



require 'application/models/advert.php';


$adverts = getAdverts();

include "application/views/list_view.php";