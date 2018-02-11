<?php

/*
 *
 * Microframework Bussines Logic class - calculates ISS position from api calls 
 * 
 */

class IssPosition {

	public function calculatePosition() {
		$urlco = 'https://api.wheretheiss.at/v1/satellites/25544';
		$content = file_get_contents($urlco);
		$json = json_decode($content, true);		
		$latitiude = $json['latitude'];
		$longtitiude = $json['longitude'];	


		$urlgm = 'https://maps.googleapis.com/maps/api/geocode/json?latlng='.$latitiude.','.$longtitiude.'&key=AIzaSyA5mbr93AkGw8NCHFyW1VUp31U5sy0pJSY';
		$contentgm = file_get_contents($urlgm);
		$jsongm = json_decode($contentgm, true);
		$status = $jsongm['status'];
		$place = $jsongm['results'][0]['address_components'][1]['long_name'];
		$country = $jsongm['results'][0]['address_components'][4]['long_name'];
		if ($status === 'ZERO_RESULTS') {
			$data = 'Cannot show ISS position from API, ISS is currently over sea. Google maps does not support ocean / see coordinates';
		} elseif ($status === 'OK') {
			if (empty($place) AND empty($country)) {
				$data = 'Could not get location info from goople map api, please refresh page and try again';
			} else {
				$data = 'ISS is over '. $place. ', '.$country. '.';
			}
		}
		return $data;
	}
	
}

