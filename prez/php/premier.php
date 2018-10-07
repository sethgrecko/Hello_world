<!doctype html>
<html>
	<header>
		<meta charset="utf-8">
		<title>PHP</title>
		
	</header>



<body>
		<h1>gestion de collection de cailoux</h1>

	<p>Bonjour je vais essayer de faire un tableau dynamique où vous pourrez gerer votre collection de cailloux pour les sertir sur votre arme epique !</p> 
	<p>OK c'est moche mais c'est du test ! du moment que ca marche !</p>

	<p>Le principe ? vous rentrez vous pierres possedées et le tableau se forme !</p>



	<table>
		<tr>couleur en fonction de la rareté</tr>
		<tr>
			<th></th>
    		<th>Gris</th>
    		<th>Verts</th>
    		<th>Bleus</th>
    		<th>Violets</th>
     	</tr>
 	 	<tr>
 	 		<td><?php echo $prenom; ?></td>
    		<td><?php echo $_POST['gris']; ?></td>
    		<td><?php echo $_POST['verts']; ?></td>
    		<td><?php echo $_POST['bleus']; ?></td>
  			<td><?php echo $_POST['violets']; ?></td>
  		</tr>
	</table>





</body>

<!-- apres 1 semaine a chercher j'ai trouvé !!!! dans le tableau mon echo $_POST etait en minuscule...... On ne dira rien...-->