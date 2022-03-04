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
		<div class="container">
			<div class="span 10 offset1">
				<div class="row">
					<h3><strong>Mise à jour d'une organisation</strong></h3>
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
						<label class="control-label">Ont-ils des contrats formel?</label>
							<div class="controls">
								<input type="text" name="region" placeholder="Contrat" value="<?php echo htmlentities($contrat); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Existe t-il un dispositif de formation du personnel ? </label>
							<div class="controls">
								<input type="text" name="departement" placeholder="Formation" value="<?php echo htmlentities($formation); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Votre entreprise prend-elle en compte les quotisations sociales et patronale ?</label>
							<div class="controls">
								<input type="text" name="commune" placeholder="Quotisation sociale" value="<?php echo htmlentities($quotisation); ?>">
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
						<label class="control-label">Le numéro de enquéteur</label>
							<div class="controls">
								<input type="text" name="admin_id" placeholder="admin_id" value="<?php echo htmlentities($admin_id); ?>">
								<span class="help-inline"></span>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Le quartier de l'entreprise </label>
							<div class="controls">
								<input type="text" name="ressource_id" placeholder="ressource_id" value="<?php echo htmlentities($ressource_id); ?>">
								<span class="help-inline"></span>
							</div>
					</div>
					<br>
					<div class="form-actions">
						<input type="hidden" name="form-submitted" value="1">
						<button type="submit" class="btn btn-success">Mettre à jour</button>
						<a class="btn btn-default" href="index.php">Back</a>
					</div>
				</form>
			</div>
		</div>
	</body>
</html>