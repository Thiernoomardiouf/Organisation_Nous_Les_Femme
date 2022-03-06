<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Crud app Update Form</title>
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
	</head>
	
	<body>
		<div class="container my-5">
			<div class="span 10 offset1">
				<div class="row">
					<h3 class="text-center"><strong>Mise à jour d'une organisation</strong></h3>
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
									<input type="text" name="nom" class="form-control" placeholder="Nom" value="<?php echo htmlentities($organisation->nom); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Coordonnées GPS</label>
								<div class="controls">
									<input type="text" name="coordonnees" class="form-control" placeholder="coordonnes" value="<?php echo htmlentities($organisation->coordonnees); ?>">
									<span class="help-inline"></span>
							</div>
						</div>
				    </div>
                    
				    <div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Ninea</label>
								<div class="controls">
									<input type="text" name="ninea" class="form-control" placeholder="ninea" value="<?php echo htmlentities($organisation->ninea); ?>">
									<span class="help-inline"></span>
								</div>
					    </div>

						<div class="col-6 mb-3">
							<label class="control-label">Ont-ils des contrats formel?</label>
								<div class="controls">
									<input type="text" name="contrat" class="form-control" placeholder="Contat" value="<?php echo htmlentities($organisation->contrat); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Existe t-il un dispositif de formation du personnel ? </label>
								<div class="controls">
									<input type="text" name="formation" class="form-control" placeholder="Formation" value="<?php echo htmlentities($organisation->formation); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Votre entreprise prend-elle en compte les quotisations sociales et patronale ?</label>
								<div class="controls">
									<input type="text" name="quotisation" class="form-control" placeholder="Quotisation sociale" value="<?php echo htmlentities($organisation->quotisation); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Siége</label>
								<div class="controls">
									<input type="text" name="siege" class="form-control" placeholder="siege" value="<?php echo htmlentities($organisation->siege); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Régistre</label>
								<div class="controls">
									<input type="text" name="registre" class="form-control" placeholder="registre" value="<?php echo htmlentities($organisation->registre); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Regime</label>
								<div class="controls">
									<input type="text" name="regime" class="form-control" placeholder="regime" value="<?php echo htmlentities($organisation->regime); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Date de creation</label>
								<div class="controls">
									<input type="date" name="date_creation" class="form-control" placeholder="date_creation" value="<?php echo htmlentities($organisation->date_creation); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Nombre d'employe</label>
								<div class="controls">
									<input type="number" name="nombre_employe" class="form-control" placeholder="nombre_employe" value="<?php echo htmlentities($organisation->nombre_employe); ?>">
									<span class="help-inline"></span>
								</div>
						</div>

						<div class="col-6 mb-3">
							<label class="control-label">Le numéro de enquéteur</label>
								<div class="controls">
									<input type="number" name="admin_id" class="form-control" placeholder="admin_id" value="<?php echo htmlentities($organisation->admin_id); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
                    
					<div class="row">
						<div class="col-6 mb-3">
							<label class="control-label">Le quartier de l'entreprise</label>
								<div class="controls">
									<input type="number" name="ressource_id" class="form-control" placeholder="ressource_id" value="<?php echo htmlentities($organisation->ressource_id); ?>">
									<span class="help-inline"></span>
								</div>
						</div>
					</div>
					<br>
					<div class="form-actions">
						<input type="hidden" name="form-submitted" value="1">
						<button type="submit" class="btn btn-success">Mettre à jour</button>
						<a class="btn btn-default btn-danger" href="index.php">Retour</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>