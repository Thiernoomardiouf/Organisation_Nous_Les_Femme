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
		<div class="container">
			<div class="span10 offset 1">
				<div class="row">
					<h3><strong>Voir une entreprise</strong></h3>
				</div>

				<div class="form-horizontal">
					<div class="control-group">
						<label class="control-label">Nom:</label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->nom; ?>
								</label>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Coordonnées:</label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->coordonnees; ?>
								</label>
							</div>
					</div>

					<div class="control-group">
						<label class="control-label">Siege:</label>
							<div class="controls">
								<label class="checkbox">
									<?php echo $organisation->phosiegene; ?>
								</label>
							</div>
					</div>
					<br>
					<div class="form-actions">
						<a class="btn btn-default" href="index.php">Back</a>
					</div>
			</div>
		</div>
	</body>
</html>