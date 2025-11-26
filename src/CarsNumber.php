<?php
namespace Weap0n3\CarsNumber;

class CarsNumber{
	public function getCity($carNumber):string {
		$cityCode = explode("-", $carNumber)[0];

		if ($cityCode=="ZE"){
			return "Zell am See";
		}
		else if ($cityCode == "HA"){
			return "Hallein";
		}
		else if ($cityCode == "JO"){
			return "St. Johann im Pongau";
		}
		else if ($cityCode == "S"){
			return "Salzburg - Stadt";
		}
		else if ($cityCode == "SL"){
			return "Salzburg - Land";
		}
		else if ($cityCode == "TA"){
			return "Tamsweg";
		}
		else{
			return "Unknown City";
		}
	}
}