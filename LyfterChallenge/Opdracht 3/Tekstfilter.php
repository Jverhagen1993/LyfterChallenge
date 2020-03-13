<?php
// - BESTAND UITLEZEN - //
$input = file("input.txt");

// - REGELS UITLEZEN - //
foreach ($input as $line) 
{
	// - CHARACTERS UITLEZEN - //
	foreach (str_split($line) as $char)
	{
		// - CONTROLEREN OP ALFABET - //
		if (ctype_alpha($char)) 
		{
			echo "$char";
		}
		// - NEWLINE OMZETTEN NAAR BREAKS - //
		elseif ($char == "\n")
		{
			echo "<br/>";
		}
		// - PRINTEN VAN DE SPATIES - //
		else
		{
			echo " ";
		}
	}
}
?>
