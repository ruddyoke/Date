<?php
// echo (new Datetime(''))->format('d/m/Y');
// // die();
include 'dateFr.php';

$d_string = '06/04/2015 10:55:30';
// $d_string = '30/03/2015 10:55:30';
// $d_string = '30/03/2015';
$d = new Ruddyoke\DateFr($d_string);

// var_dump($d->getMonthFirstDay());
var_dump($d->getMonthFirstDay(), $d->getMonthLastDay(), $d->getMonthNbDays());
var_dump($d->getInfos(), $d->getDateTime(), $d->getMonthName(), $d->getDayName());
// var_dump($d->date_iso);
// var_dump(get_class_methods($d));
// var_dump($d);

// $d= new \DateTime();
// var_dump($d->format('Y')); 