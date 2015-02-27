<?php

namespace Roke\ServiceDate;

class DateFr extends Date
{
    function __construct()
    {
        $this->week = array(
		    0 => "Lundi",
		    1 => "Mardi",
		    2 => "Mercredi",
		    3 => "Jeudi",
		    4 => "Vendredi",
		    5 => "Samedi",
		    6 => "Dimanche",
		);
		$this->week_truncated = array(
		    0 => "Lun",
		    1 => "Mar",
		    2 => "Mer",
		    3 => "Jeu",
		    4 => "Ven",
		    5 => "Sam",
		    6 => "Dim",
		);
		$this->month_truncated = array(
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
		$this->month = array(
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

}