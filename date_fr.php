<?php

class Date_fr
{

	private $semaine_fr;
	private $semaine_fr_truncate ;
	private $mois_fr_truncate ;
	private $mois_fr ;

    function __construct()
    {
        $this->semaine_fr = array(
		    0 => "Lundi",
		    1 => "Mardi",
		    2 => "Mercredi",
		    3 => "Jeudi",
		    4 => "Vendredi",
		    5 => "Samedi",
		    6 => "Dimanche",
		);
		$this->semaine_fr_truncate = array(
		    0 => "Lun",
		    1 => "Mar",
		    2 => "Mer",
		    3 => "Jeu",
		    4 => "Ven",
		    5 => "Sam",
		    6 => "Dim",
		);
		$this->mois_fr_truncate = array(
		   	0 => "Jan", //"Janvier",
		    1 => "Fév", //"Février",
		    2 => "Mars",
		    3 => "Avr", //"Avril",
		    4 => "Mai",
		    5 => "Juin",
		    6 => "Juil", //"Juillet",
		    7 => "Août",
		    8 => "Sept", //"Septembre",
		    9 => "Oct", //"Octobre",
		    10 => "Nov", //"Novembre",
		    11 => "Déc", //"Décembre",
		);
		$this->mois_fr = array(
		   	0 => "Janvier", //"Janvier",
		    1 => "Février", //"Février",
		    2 => "Mars",
		    3 => "Avril", //"Avril",
		    4 => "Mai",
		    5 => "Juin",
		    6 => "Juillet", //"Juillet",
		    7 => "Août",
		    8 => "Septembre", //"Septembre",
		    9 => "Octobre", //"Octobre",
		    10 => "Novembre", //"Novembre",
		    11 => "Décembre", //"Décembre",
		);
    }

	public function getDayName($num_day) {
	    return $this->semaine_fr[intval($num_day - 1)];
	}

	public function getTruncDayName($num_day) {
	    return $this->semaine_fr_truncate[intval($num_day - 1)];
	}

	public function getMonthName($num_month) {
	    return $this->mois_fr[intval($num_month - 1)];
	}

	public function getTruncMonthName($num_month) {
	    return $this->mois_fr_truncate[intval($num_month - 1)];
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

	public function getWeekFr(){
		return $this->semaine_fr;
	}

	public function getMonthFr(){
		return $this->mois_fr;
	}

}