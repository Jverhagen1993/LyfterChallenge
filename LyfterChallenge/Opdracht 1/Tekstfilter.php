<?php
// bestand uitlezen 
$array = file("input.txt");

// regels uitlezen 
foreach ($array as $line){
	
	// characters uitlezen
	foreach (str_split($line) as $char){
		
		// controleren op alfabet
		if (ctype_alpha($char)){
			echo "$char";
		}
		
		// newline omzetten naar breaks
		elseif ($char == "\n"){
			echo "<br/>";
		}
		
		// printen van de spaties
		else{
			echo " ";
		}
	}
}
?>
