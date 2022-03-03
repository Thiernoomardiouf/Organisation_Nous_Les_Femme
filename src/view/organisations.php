<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link href="http://localhost/projects/dist/css/bootstrap.min.css" rel="stylesheet"> 
		<script src="http://localhost/projects/dist/js/bootstrap.min.js"></script>
		<title> Nous les femmes </title>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<h1><strong>Liste des organisation recensées</strong></h1>
			</div>

			<div class="row">
				<p>
					<a href="index.php?op=new" class="btn btn-success">Create</a>
				</p>	
				<table class="table table-striped table-bordered">
					<thead>
						<tr>
							<th><a href="?orderby=name">Nom</a></th>
							<th><a href="?orderby=email">Coordonnées GPS</a></th>
							<th><a href="?orderby=phone">Ninea</a></th>
							<th>Action</th>
						</tr>
					</thead>

					<tbody>
						<?php foreach ($organisations as $organisation) : ?>						
							<tr>
								<td><?php echo htmlentities($organisation->nom);  ?></td>
								<td><?php echo htmlentities($organisation->coordonnees); ?></td>
								<td><?php echo htmlentities($organisation->ninea); ?></td>
								<td>
									<a class="btn btn-info" href="index.php?op=show&id=<?php echo $organisation->id_organisation; ?>">View</a>
									<a class="btn btn-success" href="index.php?op=edit&id=<?php echo $organisation->id_organisation; ?>">Update</a>
									<a class="btn btn-danger" href="index.php?op=delete&id=<?php echo $organisation->id_organisation; ?>">Delete Organisation</a>
								</td>

							</tr>
						<?php endforeach; ?>
					</tbody>
				</table>
			</div>
		</div>
	</body>
</html>

