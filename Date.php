<?php

namespace Roke\ServiceDate;

class Date
{

	/**
	* O for monday
	* 6 for Sunday
	**/
	protected $week;

	/**
	* O for monday
	* 6 for Sunday
	**/
	protected $week_truncated ;
	protected $month ;
	protected $month_truncated ;

    function __construct()
    {
        // $this->setWeek($week);
        // $this->setWeekTruncated($week_truncated);
        // $this->setMonth($month);
        // $this->setMonthTruncated($month_truncated);
    }

	public function getDayName($num_day) {
	    return $this->week[intval($num_day - 1)];
	}

	public function getDayNameTruncated($num_day) {
	    return $this->week_truncated[intval($num_day - 1)];
	}

	public function getMonthName($num_month) {
	    return $this->month[intval($num_month - 1)];
	}

	public function getMonthNameTruncated($num_month) {
	    return $this->month_truncated[intval($num_month - 1)];
	}


	protected function setWeek($week) {
		$this->week = $week;
	}

	public function getWeek() {
		return $this->week;
	}

	protected function setWeekTruncated($week_truncated) {
		$this->week = $week;
	}

	public function getWeekTruncated() {
		return $this->week_truncated;
	}

	protected function setMonth($month) {
		$this->month = $month;
	}

	public function getMonth() {
		return $this->month;
	}

	protected function setMonthTruncated($month_truncated) {
		$this->month_truncated = $month_truncated;
	}

	public function getMonthTruncated() {
		return $this->month_truncated;
	}

	/**
	 * Retourne le numero du jour en basant sur son nom.
	 * @global Array $semaine_fr tableau de noms de jour de la semaine.
	 * @param String $nomJour Nom du jour
	 * @return Int
	 */
	public function getNumjour($nomJour) {
	    foreach ($this->semaine_fr as $key => $jour):
	        if ($jour == $nomJour):
	            return ($key + 1);
	        endif;
	    endforeach;

	    foreach ($this->semaine_fr_truncate as $key => $jour):
	        if ($jour == $nomJour):
	            return ($key + 1);
	        endif;
	    endforeach;
	}


	/* Traitement sur une date passée en paramètre*/

	public function getFirstDayWeek($date=null) {}
	public function getLastDayWeek($date=null) {}

	public function getMonday($date=null) {}
	public function getSunday($date=null) {}


	public function getFirstDayOfMonth($date=null) {}
	public function getLastDayOfMonth($date=null) {}

	public function getMonthOfDate() {}
	public function getYearOfDate() {}

}