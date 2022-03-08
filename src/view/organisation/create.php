<!DOCTYPE HTML>
<html lang="en">
	<head>
	<meta charset="utf-8">
		<link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
        />
        <link
            rel="stylesheet"
            href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css"
        />
		<title>Create Organisation Form</title>
	</head>
	
	<body>
		<div class="container my-3">
			<div class="span 10 offset1">
				<div class="row">
					<h3 class="text-center"><strong>Ajouter une organisation</strong></h3>
					<?php
						if ($errors) {
							echo '<ul class="errors">';
							foreach ($errors as $field => $error) {
								echo '<li>' . htmlentities($error) . '</li>';
							}
							echo '</ul>';
						}
					?>
				</div>

				<form class="form-horizontal" action="" method="post">
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Nom</label>
								<div class="controls ">
									<input type="text" name="nom" class="form-control" placeholder="Nom" value="<?php echo htmlentities($nom); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Coordonnées GPS</label>
								<div class="controls">
									<input type="text" name="coordonnees" class="form-control" placeholder="coordonnes" value="<?php echo htmlentities($coordonnees); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Ninea</label>
								<div class="controls">
									<input type="text" name="ninea" class="form-control" placeholder="ninea" value="<?php echo htmlentities($ninea); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Ont-ils des contrats formel?</label>
								<div class="controls">
									<input type="text" name="contrat" class="form-control" placeholder="Contat" value="<?php echo htmlentities($contrat); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Existe t-il un dispositif de formation du personnel ? </label>
								<div class="controls">
									<input type="text" name="formation" class="form-control" placeholder="Formation" value="<?php echo htmlentities($formation); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Votre entreprise prend-elle en compte les quotisations sociales et patronale ?</label>
								<div class="controls">
									<input type="text" name="quotisation" class="form-control" placeholder="Quotisation sociale" value="<?php echo htmlentities($quotisation); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Siége</label>
								<div class="controls">
									<input type="text" name="siege" class="form-control" placeholder="siege" value="<?php echo htmlentities($siege); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Régistre</label>
								<div class="controls">
									<input type="text" name="registre" class="form-control" placeholder="registre" value="<?php echo htmlentities($registre); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Regime</label>
								<div class="controls">
									<input type="text" name="regime" class="form-control" placeholder="regime" value="<?php echo htmlentities($regime); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Date de creation</label>
								<div class="controls">
									<input type="date" name="date_creation" class="form-control" placeholder="date_creation" value="<?php echo htmlentities($date_creation); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Nombre d'employe</label>
								<div class="controls">
									<input type="number" name="nombre_employe" class="form-control" placeholder="nombre_employe" value="<?php echo htmlentities($nombre_employe); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-3 mb-3">
							<label class="control-label my-1">Le nom de l'enquéteur</label>
								<div class="controls">
									<select name="admin_id" id="admin_id" class="form-select" >
										<option value="">Le nom de l'enquéteur</option>
										<?php foreach ($utilisateurs as $utilisateur) : ?>
											<option value=<?php echo $utilisateur->id_utilisa;?>> <?php echo $utilisateur->prenom . " " . $utilisateur->nom;?></option>
										<?php endforeach; ?>
									</select>
									<span class="help-inline"></span>
								</div>
						</div>
						<div class="col-3 mb-3">
							<label class="control-label my-1">Le quartier de l'entreprise</label>
								<div class="controls">
									<select name="ressource_id" id="ressource_id" class="form-select" >
										<option value="">Choisir le quartier de l'entreprise</option>
										<?php foreach ($localites as $localite) : ?>
											<option value=<?php echo $localite->id_quartier;?>> <?php echo $localite->nom_quartier;?></option>
										<?php endforeach; ?>
									</select>
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Le nom du répondant</label>
								<div class="controls">
									<input type="text" name="nomRepondant" class="form-control" placeholder="nom répondant" value="<?php echo htmlentities($nomRepondant); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
						<div class="col-6 mb-3">
							<label class="control-label">Le prénom du répondant</label>
								<div class="controls">
									<input type="text" name="prenom" class="form-control" placeholder="prenom" value="<?php echo htmlentities($prenom); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
                    </div>

					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">La fonction du répondant</label>
								<div class="controls">
									<input type="text" name="fonction" class="form-control" placeholder="fonction" value="<?php echo htmlentities($fonction); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
						<div class="col-6 mb-3">
							<label class="control-label">Le numéro de téléphone du répondant</label>
								<div class="controls">
									<input type="text" name="telephone" class="form-control" placeholder="telephone" value="<?php echo htmlentities($telephone); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
                    </div>

					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">La courriel du répondant</label>
								<div class="controls">
									<input type="text" name="courriel" class="form-control" placeholder="courriel" value="<?php echo htmlentities($courriel); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
						<div class="col-6 mb-3">
							<label class="control-label">Le numéro de l'entrepise</label>
								<div class="controls">
									<input type="number" name="id_organisation" class="form-control" placeholder="id_organisation" value="<?php echo htmlentities($id_organisation); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
                    </div>

					<br>
					<div class="form-actions mb-3">
						<input type="hidden" name="form-submitted" value="1">
						<button type="submit" class="btn btn-success">Ajouter</button>
						<a class="btn btn-default btn-danger" href="index.php?op=ret">Retour</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>