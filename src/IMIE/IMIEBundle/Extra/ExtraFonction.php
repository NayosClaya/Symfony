<?php
namespace IMIE\IMIEBundle\Extra;

class ExtraFonction {
	public function multiplier($x,$y){
		$r=$x*$y;
		return $r;
	}
		function jour($date){
			$j=$date->format('w');
			$jour='indefini';
			switch ($j) {
				case 1:
					$jour='Lundi';
					break;
				case 2:
					$jour='Mardi';
					break;
				case 3:
					$jour='Mercredi';
					break;
				case 4:
					$jour='Jeudi';
					break;
				case 5:
					$jour='Vendredi';
					break;	
				case 6:
					$jour='Samedi';
					break;	
				case 0:
					$jour='Dimanche';
					break;							
			}
			return $jour;
			
			
		}
		function semaine($date){
			$semaine=$date->format('W');
			return $semaine;
		}			
}


