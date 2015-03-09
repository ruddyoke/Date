<?php

// require 'Date.php';
// require 'DateFR.php';

// $d = new  Roke\ServiceDate\DateFr();

// var_dump($d->getWeek());

require 'vendor/autoload.php';

use  \Ruddyoke\Date;
use  \Ruddyoke\DateFr ;
// $d = new  Date();
$dfr = new  DateFr();


// var_dump($d->format('d/m/Y'));
// var_dump($d->getWeek());
// var_dump($dfr);
var_dump($dfr->getDateInfos());