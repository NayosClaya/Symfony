<?php
	namespace IMIE\IMIEBundle\FCT;

	class IMIEFonction {
		
		public function mutiplication($x,$y){
			return ($x*$y);
			
		}
		public function designation($em,$id){
			$article=$em->getRepository("IMIEBundle:Article")->find($id);
			if($article){
				$designation=$article->getDesignation();
				
			}else{
				$designation="Article non trouvé!";
				
			}
			return $designation;
		}
		function dateWeek($jour,$week,$year,$format="d/m/Y") {
			// jour=1 pour Lundi et jour=5 pour Vendredi
			$firstDayInYear=date("N",mktime(0,0,0,1,1,$year));
			if ($firstDayInYear<5)
				$shift=-($firstDayInYear-1)*86400;
			else
				$shift=(8-$firstDayInYear)*86400;
			if ($week>1) $weekInSeconds=($week-1)*604800; else $weekInSeconds=0;
			$date=date($format,mktime(0,0,0,1,$jour,$year)+$weekInSeconds+$shift);
			return $date;
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
