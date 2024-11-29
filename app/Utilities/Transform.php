<?php

namespace App\Utilities;

use App\Enums\Strand;

class Transform {
	public static function getStrandAcronym(string $strandName) {
    //Retrieve the strand map
    $strandMap = Strand::map();
    //check if the strand name exists in the map
    if(array_key_exists($strandName, $strandMap)) {
       return $strandMap[$strandName];
    }
    // If the strand name is not found, you might want to handle this case
    // For example, throw an exception or return null
    return null;
	}
}