<?php

function intNaarRomeins($integer)
{
	// omzetten naar een integer, voor de zekerheid
	$integer = intval($integer);
	$uitkomst = '';
	
	// een array om de romeinse tekens op te zoeken
	$array = [
		'M' => 1000,
		'CM' => 900,
		'D' => 500,
		'CD' => 400,
		'C' => 100,
		'XC' => 90,
		'L' => 50,
		'XL' => 40,
		'X' => 10,
		'IX' => 9,
		'V' => 5,
		'IV' => 4,
		'I' => 1
	];
	
	foreach($array as $romeins => $waarde)
	{
		// zoek uit hoe veel overeenkomsten er zijn
		$gelijk = intval($integer/$waarde);
		
		// voegt de character aan de hand van de overeenkomsten toe in de string
		$uitkomst .= str_repeat($romeins,$gelijk);
		
		// stel de integer in om het restgetal te worden van de integer en de waarde
		$integer = $integer % $waarde;
	}
	// nu is het romeinse nummer opgebouwd, Geef het terug
	return $uitkomst;


}

    echo intNaarRomeins(159).'<br/>';
    echo intNaarRomeins(296).'<br/>';
    echo intNaarRomeins(849).'<br/>';
    echo intNaarRomeins(1269).'<br/>';
    echo intNaarRomeins(3992).'<br/>';

?>