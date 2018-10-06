<?php
namespace Ruddyoke;

/**
* 
*/
class Date extends \Datetime
{
	var $days = array();
	var $months = array();
	var $is_fr_format  = false;
	var $date_iso = '';
	var $date_fr = '';
	var $separator = '--';
	var $infos = array();

	function __construct($date=null) {
		$date = empty($date) ? null : $date;
		$this->date_iso = $this->transformToIso($date);
		parent::__construct($this->date_iso);
		$this->setInfos()->setMonthName()->setWeekDay()->manage_day();
		$this->dateTime = $this->format('Y/m/d h:i:s');
		$this->dateTime_fr = $this->format('d/m/Y h:i:s');
	}

	private function transformToIso($date) {
		if($date===null) return $date;
		if(!$this->is_fr_format) return $date;

		preg_match_all('#(\d{2})([\/_-])(\d{2})[\/_-](\d{4})( (\d{2})(:(\d{2}))?(:(\d{2}))?)?#', $date, $matches);
		// var_dump($matches[4][0].'/'.$matches[3][0].'/'.$matches[1][0].$matches[5][0]);die();
		$this->separator = $matches[2][0];
		return $matches[4][0].'/'.$matches[3][0].'/'.$matches[1][0].$matches[5][0];
	}

	private function setInfos(){
	    $this->infos = getdate($this->getTimestamp());
	    return $this;
	}

	private function setMonthName(){
		if(!$this->is_fr_format) return $this;
	    $this->infos['month'] = $this->months[(int)$this->format('m')-1];
	    return $this;
	}

	private function setWeekDay(){
		if(!$this->is_fr_format) return $this;
	    $this->infos['weekday'] = $this->days[(int)$this->format('w')-1];
	    return $this;
	}

	public function getInfos(){
	    return $this->infos;
	}

	public function getDateTime(){
		if($this->is_fr_format) 
			return $this->dateTime_fr;
		return $this->dateTime;
	}

	public function getTime(){
		return $this->format('h:i:s');
	}

	public function getDate(){
		return explode(' ', $this->getDateTime())[0];
	}

	public function getMonth(){
		return $this->format('m');
	}

	public function getMonthName(){
		return $this->infos['month'];
	}

	public function getShortMonthName(){
		return substr($this->getMonthName(), 0, 3) ;
	}

	public function getDayName(){
		return $this->infos['weekday'];
	}

	public function getShortDayName(){
		return substr($this->getDayName(), 0, 3) ;
	}

	/**
	* Return an date object
	*/
	public function getMonthFirstDay(){
		return $this->month_first_day;
	}

	public function getMonthLastDay(){
		return $this->month_last_day;
	}

	public function getMonthNbDays(){
		return $this->month_nb_days;
	}

	private function manage_day(){
		list($Y, $M, $D) = explode('/', $this->format('Y/m/d'));
		$this->month_first_day   = date('d/m/Y', mktime(0, 0, 0, $M, 1, $Y));
		$this->month_nb_days = date("t", mktime(0, 0, 0, $M, 1, $Y));
		$this->month_last_day    = date('d/m/Y', mktime(0, 0, 0, $M, $this->month_nb_days, $Y));
		return $this;
	}

	/*public function __tostring(){
	}*/
	
	public functionmakeSecondsInDate(){
		return gmdate("H:i:s", 685);
	}
}
