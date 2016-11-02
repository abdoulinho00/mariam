<!DOCTYPE HTML>
<html>
	<head>
		<title>&lt;Add a patient&gt;</title>
		<?php
		include "../util/meta.php";
		?>
	</head>
	<body>
		<div class="container">
			<div class="row">
				 <img src="../images/banner.jpg" class="img-rounded" alt="fruiti" >
			</div>
			<div class="row">
				<?php
				include "../util/header.php";
				?>
				<div class="col-md-10">
					<h1 class="text-default">Ajouter un patient</h1>
					<form action="list.php"  method="post" class="form-horizontal col-md-10">
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title ">Informations personnelles</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="name" class="col-sm-2 control-label">Nom</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="name" placeholder="Name">
									</div>
								</div>
								<div class="form-group">
									<label for="firstname" class="col-sm-2 control-label">Prenom</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="firstname" placeholder="firstname">
									</div>
								</div>
								<div class="form-group">
									<label for="birthday" class="col-sm-2 control-label">Date de naissance</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="birthday" placeholder="Birthday">
									</div>
								</div>
								<div class="form-group">
									<label for="adress" class="col-sm-2 control-label">Addresse</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="adress" placeholder="Adress, ex : 4000 Rue Bouchette">
									</div>
								</div>
								<div class="form-group">
									<label for="email" class="col-sm-2 control-label">E-mail</label>
									<div class="col-sm-4">
										<input type="email" class="form-control" id="email" placeholder="test@gmail.com">
									</div>
								</div>
								<div class="form-group">
									<label for="phone" class="col-sm-2 control-label">Addresse</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="phone" placeholder="+1 555-555-5555">
									</div>
								</div>
							</div>
						</div>
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h3 class="panel-title ">Signes vitaux et historique</h3>
							</div>
							<div class="panel-body">
								<div class="form-group">
									<label for="height" class="col-sm-2 control-label">Taille</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="height" placeholder="175 (cm)">
									</div>
								</div>
								<div class="form-group">
									<label for="weight" class="col-sm-2 control-label">Poids</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="weight" placeholder="weight">
									</div>
								</div>
								<div class="form-group">
									<label for="pressure" class="col-sm-2 control-label">Tension arterielle</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="pressure" placeholder="pressure">
									</div>
								</div>
								<div class="form-group">
									<label for="hearthrate" class="col-sm-2 control-label">Pulse du coeur</label>
									<div class="col-sm-4">
										<input type="text" class="form-control" id="hearthrate" placeholder="127 beat/second">
									</div>
								</div>
								<div class="form-group">
									<label for="history" class="col-sm-2 control-label">Historique</label>
									<div class="col-sm-8">
										<textarea rows="5" class="form-control" id="history" placeholder="Allergies, opérations ..."></textarea>
									</div>
								</div>
							</div>
						</div>
						
						<button type="submit" class="btn btn-primary">
							Ajouter
						</button>
						<button type="cancel" class="btn btn-primary">
							Annuler
						</button>
					</form>
				</div>
			</div>
			<?php
			include "../util/footer.php";
			?>
		</div>
	</body>
</html>