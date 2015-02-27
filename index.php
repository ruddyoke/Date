<?php

require 'Date.php';
require 'DateFR.php';

$d = new  Roke\ServiceDate\DateFr();

var_dump($d->getWeek());