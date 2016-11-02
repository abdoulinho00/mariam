<!DOCTYPE HTML>
<html>
	<head>
		<title>Liste des patients</title>
		<?php include "../util/meta.php" ; ?>
	</head>
	<body>
		<div class="container">
		<h1>Liste des patients</h1>
		<table clas="table">
			<thead>
				<tr>
					<td>Nom Complet</td>
					<td>Age</td>
					<td>Adresse</td>
					<td>Poids</td>
					<td>Taille</td>
					<td>Actions</td>
				</tr>
			</thead>
		</table>
		<p> le contenu de ce tableau dev ra etre recuperer depuis la base de données</p>
		<p> les actions à fournir sont : voir la fiche complete du patient, editer un patient et supprimer un patient</p>
		<?php include "../util/footer.php" ; ?>
		</div>
	</body>
</html>