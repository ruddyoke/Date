<?php
namespace Ruddyoke;
include 'date.php';

/**
* 
*/
class DateFr extends Date {

	function __construct($date=null) {
		$this->days  = array('lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche');
		$this->months = array('janvier', 'février','mars','avril','mai','juin','juillet','août','septembre','octobre','novembre','décembre');
		$this->is_fr_format  = true;

		parent::__construct($date);
	}
}