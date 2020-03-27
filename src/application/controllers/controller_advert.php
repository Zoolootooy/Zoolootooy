<?php
require '../models/advert.php';
require '../models/country.php';


$advert = getAdvert($_GET['id']);
$country = getCountryByID($advert[0]['country_id']);

include "../views/advert_view.php";