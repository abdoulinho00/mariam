<!DOCTYPE HTML>
<html>
	<head>
		<title>test page</title>
	</head>
	<body>

		<h1>Ajouter un patient</h1>
		<form action="list.php"  method="post">
			<fieldset>
				<table>
					<tr>
						<td>Nom : </td>
						<td>
						<input type="text" name="lastname" />
						</td>
					</tr>
					<tr>
						<td>Prenom : </td>
						<td>
						<input type="text" name="firstname" />
						</td>
					</tr>
					<tr>
						<td>Date de naissance : </td>
						<td>
						<input type="text" name="birthdate" />
						</td>
					</tr>
					<tr>
						<td>Adresse : </td>
						<td>
						<input type="text" name="adress" />
						</td>
					</tr>
					<tr>
						<td>Email : </td>
						<td>
						<input type="text" name="email" />
						</td>
					</tr>
					<tr>
						<td>Telephone : </td>
						<td>
						<input type="text" name="phone" />
						</td>
					</tr>
				</table>
			</fieldset>
			<fieldset>
				<table>
					<tr>
						<td>Taille : </td>
						<td>
						<input type="text" name="height" />
						</td>
					</tr>
					<tr>
						<td>Poids : </td>
						<td>
						<input type="text" name="weight" />
						</td>
					</tr>
					<tr>
						<td>Antecedants : </td>
						<td>
						<input type="text" name="history" />
						</td>
					</tr>
					<tr>
						<td>Tension : </td>
						<td>
						<input type="text" name="lastname" />
						</td>
					</tr>
				</table>
			</fieldset>
			<button type="submit">Ajouter</button>
			<button type="button">Annuler</button>
		</form>
	</body>
</html>