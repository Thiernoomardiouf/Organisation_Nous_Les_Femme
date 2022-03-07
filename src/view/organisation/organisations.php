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
		<title> Nous les femmes </title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1><strong>Liste des organisation recensées</strong></h1>
			</div>

			<div class="row">
				<div class="row">
					<div class="col-3">
						<p>
							<a href="index.php?op=new" class="btn btn-success">Ajouter</a>
						</p>
					</div>
					<div class="col-3"></div>
					<div class="col-3"></div>
					<div class="col-3">
						<p>
							<a href="index.php?op=dec" class="btn btn-danger">Deconnexion</a>
						</p>
					</div>
				</div>	
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><a href="?orderby=nom">Nom</a></th>
							<th><a href="?orderby=coordonnees">Coordonnées GPS</a></th>
							<th><a href="?orderby=ninea">Ninea</a></th>
							<th><a href="?orderby=siege">Siege</a></th>
							<th><a href="?orderby=date_creation">Date de creation</a></th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($organisations as $organisation) : ?>						
							<tr>
								<td><?php echo htmlentities($organisation->nom);  ?></td>
								<td><?php echo htmlentities($organisation->coordonnees); ?></td>
								<td><?php echo htmlentities($organisation->ninea); ?></td>
								<td><?php echo htmlentities($organisation->siege); ?></td>
								<td><?php echo htmlentities($organisation->date_creation); ?></td>
								<td>
									<a class="btn btn-info" href="index.php?op=show&id=<?php echo $organisation->id_organisation; ?>">Détails</a>
									<a class="btn btn-success" href="index.php?op=edit&id=<?php echo $organisation->id_organisation; ?>">Modifier</a>
									<a class="btn btn-danger" href="index.php?op=delete&id=<?php echo $organisation->id_organisation; ?>">Supprimer</a>
								</td>

							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>

