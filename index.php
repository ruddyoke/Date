<?php

require 'vendor/autoload.php';

use  \Ruddyoke\DateFr ;
// $d = new  \Ruddyoke\Date();
$dfr = new  DateFr();


// var_dump($d->format('d/m/Y'));
// var_dump($d->getWeek());
// var_dump($dfr);
var_dump($dfr->getDateInfos());