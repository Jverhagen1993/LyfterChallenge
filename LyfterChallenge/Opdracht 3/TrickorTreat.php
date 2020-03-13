<?php
// bestand uitlezen
$tekst = file("inputToT.txt");

// loop over bestand, parse waardes en bereken gemiddelde
foreach ($tekst as $regel){
	$waardes = OmzettenNaarWaardes($regel);
	
	$vampier = $waardes["Vampires"];
	$zombie = $waardes["Zombies"];
	$heksen = $waardes["Witches"];
	$huizen = $waardes["Houses"];
	
	$vampierSnoepjes = 3 * $vampier;
	$zombieSnoepjes = 4 * $zombie;
	$heksenSnoepjes = 5 * $heksen;
	
	$kinderen = $vampier + $zombie + $heksen;
	
	$snoepjes = ($vampierSnoepjes + $zombieSnoepjes + $heksenSnoepjes) * $huizen / $kinderen;
	
	$gemiddeld = floor($snoepjes);	

	echo "Snoepjes:" . $gemiddeld . "<br/>";	
}

// het splitten van een regel en de waarde er uithalen
function OmzettenNaarWaardes($regel){
	$stukken = explode(": ", $regel);
	$vampires = (int)explode(",", $stukken[1])[0];
	$zombies = (int)explode(",", $stukken[2])[0];
	$witches = (int)explode(",", $stukken[3])[0];
	$houses = (int)explode(",", $stukken[4])[0];
	
	return [
		'Vampires'=> $vampires,
		'Zombies'=> $zombies,
		'Witches'=> $witches,
		'Houses'=> $houses,
	];
}
?>
