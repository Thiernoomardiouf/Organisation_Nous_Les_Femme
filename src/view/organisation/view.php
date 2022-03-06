<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>View Contact</title>
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
		    <div class="row">
				<div class="col-6">
					<div class="">
						<h3><strong>Les détails de l'organisation</strong></h3>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>Nom de l'entreprise:</strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->nom; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>Coordonnées GPS de l'entreprise:</strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->coordonnees; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>Le Ninea de l'organisation:</strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->ninea; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>Les employés de l'organisation ont-ils des contrats formel?</strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->contrat; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>Existe t-il un dispositif de formation du personnel ? </strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->formation; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong> Votre entreprise prend-elle en compte les quotisations sociales et patronale ? </strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->quotisation; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>Le siege de l'organisation:</strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->siege; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong> Le numéro de régistre de l'entreprise </strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->registre; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong> Quel est le régime juridique de votre entreprise ? </strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->regime; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong> Le nombre d'employés de l'entreprise </strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->nombre_employe; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong> La date de création de l'entreprise </strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->date_creation; ?>
								</label>
							</div>
					</div>
				</div>
				<div class="col-6">
					<div class="">
						<h3><strong>Le répondant de l'entrepise</strong></h3>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>Nom du répondant:</strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $repondant->nomRepondant; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>Prénom du répondant:</strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $repondant->prenom; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>La fonction du répondant:</strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $repondant->fonction; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong>Le téléphone du répondant</strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $repondant->telephone; ?>
								</label>
							</div>
					</div>

					<div class="control-group mb-3">
						<label class="control-label"> <strong> Le courriel du répondant </strong> </label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $repondant->courriel; ?>
								</label>
							</div>
					</div>
				</div>
		    </div>
			<br>
			<div class="form-actions">
				<a class="btn btn-default btn-success " href="index.php">Retour</a>
			</div>
		</div>
	</body>
</html>