<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Create Organisation Form</title>
		<meta charset="utf-8">
		<link href="http://localhost/projects/dist/css/bootstrap.min.css" rel="stylesheet"> 
		<script src="http://localhost/projects/dist/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="span 10 offset1">
				<div class="row">
					<h3><strong>Ajouter une organisation</strong></h3>
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
					<div class="control-group">
						<label class="control-label">Nom</label>
							<div class="controls">
								<input type="text" name="nom" placeholder="Nom" value="<?php echo htmlentities($nom); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Coordonnées GPS</label>
							<div class="controls">
								<input type="text" name="coordonnees" placeholder="coordonnes" value="<?php echo htmlentities($coordonnees); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Ninea</label>
							<div class="controls">
								<input type="text" name="ninea" placeholder="ninea" value="<?php echo htmlentities($ninea); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Région</label>
							<div class="controls">
								<input type="text" name="region" placeholder="region" value="<?php echo htmlentities($region); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Départementnnées</label>
							<div class="controls">
								<input type="text" name="departement" placeholder="departement" value="<?php echo htmlentities($departement); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Commune</label>
							<div class="controls">
								<input type="text" name="commune" placeholder="commune" value="<?php echo htmlentities($commune); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Quartier</label>
							<div class="controls">
								<input type="text" name="quartier" placeholder="quartier" value="<?php echo htmlentities($quartier); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Siége</label>
							<div class="controls">
								<input type="text" name="siege" placeholder="siege" value="<?php echo htmlentities($siege); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Régistre</label>
							<div class="controls">
								<input type="text" name="registre" placeholder="registre" value="<?php echo htmlentities($registre); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Regime</label>
							<div class="controls">
								<input type="text" name="regime" placeholder="regime" value="<?php echo htmlentities($regime); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Date de creation</label>
							<div class="controls">
								<input type="date" name="date_creation" placeholder="date_creation" value="<?php echo htmlentities($date_creation); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Nombre d'employe</label>
							<div class="controls">
								<input type="text" name="nombre_employe" placeholder="nombre_employe" value="<?php echo htmlentities($nombre_employe); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">L'enquéteur</label>
							<div class="controls">
								<input type="text" name="admin_id" placeholder="admin_id" value="<?php echo htmlentities($admin_id); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">La ressource humaine</label>
							<div class="controls">
								<input type="text" name="ressource_id" placeholder="ressource_id" value="<?php echo htmlentities($ressource_id); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<br>
					<div class="form-actions">
						<input type="hidden" name="form-submitted" value="1">
						<button type="submit" class="btn btn-success">Ajouter</button>
						<a class="btn btn-default" href="index.php">Back</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>