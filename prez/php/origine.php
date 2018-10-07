<!doctype html>
<html>
	<header>
		<meta charset="utf-8">
		<title>PHP</title>

		<?php
		    //introduction d'un prompt 
		    function prompt($prompt_msg)
		    	{
		        echo ("<script type='text/javascript'> var answer = prompt('".$prompt_msg."'); </script>");

		        $reponse = "<script type='text/javascript'> document.write(answer); </script>";
		        return($reponse);
		    	}

		    
		    $prompt_msg = "entrez votre prénom";
		    $prenom = prompt($prompt_msg);

			   $output_msg = "bonjour  ".$prenom."!";
			    echo($output_msg);

		?>
			
	</header>



<body>
		<h1>gestion de collection de cailoux</h1>

	<p>Bonjour je vais essayer de faire un tableau dynamique où vous pourrez gerer votre collection de cailloux pour les sertir sur votre arme epique !</p> 
	<p>OK c'est moche mais c'est du test ! du moment que ca marche !</p>

	<p>Le principe ? vous rentrez vous pierres possedées et le tableau se forme !</p>




<form method="post" action="premier.php" enctype="multipart/form-data">


	<fieldset>
		<legend> vos cailloux</legend> 
		 <!-- titre du tableau --> 
		<p>
			<label for="gris">nombre de cailloux gris ?      </label>
			<input type="number" min="5" max="100" name="gris" id="gris1" step="1" />
		</p>

		<p>
			<label for="verts">nombre de cailloux verts ?      </label>
			<input type="number" min="2" max="100" name="verts" id="verts2" step="1" />
		</p>
		<p>
			<label for="bleus">nombre de cailloux bleus ?      </label>
			<input type="number" min="1" max="100" name="bleus" id="bleus3" step="1" />
		</p>
		<p>
			<label for="violets">nombre de cailloux violets ?      </label>
			<input type="range" min="1" max="10" name="violets" id="violets4" step="1" />
		</p>

		<input type="submit" value="enregistrer" name="submit" id="submit" />
	</fieldset>
</form>









</body>
