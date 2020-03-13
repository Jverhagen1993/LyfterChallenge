<!DOCTYPE html>

<?php
include "Database.php"
?>

<?php
//Database connectie button verzenden
if(isset($_POST["btnVerzend"]))
{
	$Naam = $_POST['Naam'];
	$Invoer = $_POST['Invoer'];
	

	
	$query = "INSERT INTO opdrachtlyfter (Naam, Invoer)";
	$query .= "VALUES ('$Naam','$Invoer')";

	
	$stm = $con->prepare($query);
	
	if($stm->execute()){
		echo "";
	} else {
		echo "Het is mislukt!";
	}
	
	
}
?>
<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS.css">
	<script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?lang=ruby&amp;skin=sunburst%22%3E"></script>

	
    <title>Database</title>
	</head>
	<body>
	<div class="pagecontent">
		<form method="POST">
			<div class="inputveld">
				<center><h2>Toevoegen</h2>
				<INPUT type="Text" name="Naam"/></br>
				<textarea class="invoerveld" name="Invoer"/></textarea></br>
				<button type="submit" name="btnVerzend" class="btn btn-dark">Versturen</button></center>
			</div>
			<div class="outputveld">
				<center><h2>Ophalen</h2>
				<?php
				//database connectie button ophalen projecten
				if(isset($_POST["btnOphalen"])) { 

					echo "<table id='TableView' class='tabelstyle'>
						<tr>
						<th>Naam</th>
						<th>Invoer</th>
						</tr>";
										
					$query = "SELECT * FROM opdrachtlyfter";
					$stm = $con->prepare($query);
						if ($stm->execute()) {
							$resultaat = $stm->FetchAll(PDO::FETCH_OBJ);
							foreach ($resultaat as $project){
								echo 
								"<tr><td><pre>" . $project->Naam . "</pre></td>
								<td><pre>" . $project->Invoer . "</pre></td>" . "</tr>";
								
								

							} echo "</table>";
						} else echo "Er is iets mis gegaan met het ophalen van de data!";
					} 
				?>
				<button type="submit" name="btnOphalen" class="btn btn-dark">Ophalen</button></center>
			</div>
			<div>
				<center><a href="Homepage.php"><button type="button" id="homebutton" class="btn btn-dark">Home</button></a></center>
			</div>
		</form>
	</div>
			
	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  
	</body>
	
</html>


