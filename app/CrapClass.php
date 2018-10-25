<?php
namespace App;

class CrapClass 
{

    private $states;

    public function __construct() {
	    $this->states = [
			"Sabah" => ["Kota Kinabalu", "Sandakan", "Tawau"],
			"Sarawak" => ["Sibu", "Kuching", "Miri"],
			"Selangor" => ["Sepang", "Sabak Bernam", "Gombak"],
			"Johor" => ["Batu Pahat", "Muar", "Segamat"],
			"Terengganu" => ["Dungun", "Marang", "Setiu"],
		];
    }

	public function listCities($state) {
		if (!isset($this->states[$state])) {
		    throw new \UnexpectedValueException("Unknown state $state");
		} 

		return implode(", ", $this->states[$state]);
	}	
}