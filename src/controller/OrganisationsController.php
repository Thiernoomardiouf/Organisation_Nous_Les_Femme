<?php
//require_once $_SERVER['DOCUMENT_ROOT'] . 'vendor/autoloader.php';
//require_once 'src/model/OrganisationsService.php';

include_once 'src/model/OrganisationsService.php';
include_once 'src/model/RepondantsService.php';

class OrganisationController 
{

	private $organisationsService = null;
	private $repondantsService = null;

	public function __construct()
	{
		$this->organisationsService = new OrganisationsService();
		$this->repondantsService = new RepondantsService();
	}

	public function redirect($location)
	{
		header('Location: ' . $location);
	}

	public function handleRequest()
	{
		$op = isset($_GET['op']) ? $_GET['op'] : null;

		try 
		{
			if (!$op || $op == 'list')
			{
				$this->listOrganisations();
			}
				elseif ($op == 'new')
				{
					$this->saveOrganisation();
				}
				elseif ($op == 'edit')
				{
					$this->editOrganisation();
				}
				elseif ($op == 'delete')
				{
					$this->deleteOrganisation();
				}
				elseif ($op == 'show')
				{
					$this->showOrganisation();
				}
				else 
				{
					$this->showError("Page introuvable", "Page à exécuter" . $op . " n'a pas été trouvé" );
				}
		}
		catch(Exception $e)
		{
			$this->showError("Application error", $e->getMessage());
		}
	}	

	public function listOrganisations()
	{
		$orderby = isset($_GET['orderby']) ? $_GET['orderby'] : null;
		$organisations = $this->organisationsService->getAllOrganisations($orderby);
		include  'src/view/organisation/organisations.php';
	}

	public function saveOrganisation()
	{
		$title = 'Create New Organisation';

		$nom 	= '';
		$coordonnees  = '';
		$ninea = '';
		$contrat 	= '';
		$formation  = '';
		$quotisation = '';
		$siege  = '';
		$registre = '';
		$regime = '';
		$nombre_employe  = '';
		$date_creation = '';
		$admin_id  = '';
		$ressource_id = '';

		$nomRepondant = '';
		$prenom = '';
		$fonction = '';
		$telephone = '';
		$courriel = '';
		$id_organisation = '';

		$errors = array();

		if (isset($_POST['form-submitted']))
		{
			$nom   = isset($_POST['nom'])   ? trim($_POST['nom'])   : null;
			$coordonnees  = isset($_POST['coordonnees'])  ? trim($_POST['coordonnees'])  : null;
			$ninea = isset($_POST['ninea']) ? trim($_POST['ninea']) : null;
			$contrat   = isset($_POST['contrat'])   ? trim($_POST['contrat'])   : null;
			$formation  = isset($_POST['formation'])  ? trim($_POST['formation'])  : null;
			$quotisation = isset($_POST['quotisation']) ? trim($_POST['quotisation']) : null;
			$siege  = isset($_POST['siege'])  ? trim($_POST['siege'])  : null;
			$registre = isset($_POST['registre']) ? trim($_POST['registre']) : null;
			$regime   = isset($_POST['regime'])   ? trim($_POST['regime'])   : null;
			$nombre_employe = isset($_POST['nombre_employe']) ? trim($_POST['nombre_employe']) : null;
			$date_creation  = isset($_POST['date_creation'])  ? trim($_POST['date_creation'])  : null;
			$admin_id = isset($_POST['admin_id']) ? trim($_POST['admin_id']) : null;
			$ressource_id = isset($_POST['ressource_id']) ? trim($_POST['ressource_id']) : null;

			$nomRepondant = isset($_POST['nomRepondant']) ? trim($_POST['nomRepondant']) : null;
			$prenom = isset($_POST['prenom']) ? trim($_POST['prenom']) : null;
			$fonction = isset($_POST['fonction']) ? trim($_POST['fonction']) : null;
			$telephone = isset($_POST['telephone']) ? trim($_POST['telephone']) : null;
			$courriel = isset($_POST['courriel']) ? trim($_POST['courriel']) : null;
			$id_organisation = isset($_POST['id_organisation']) ? trim($_POST['id_organisation']) : null;
			

			try
			{
				$this->organisationsService->createNewOrganisation($id_organisation, $nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id);
				$this->repondantsService->createNewRepondant($nomRepondant, $prenom, $fonction, $telephone, $courriel, $id_organisation);
				$this->redirect('index.php');
				return;
			}
			catch(ValidationException $e)
			{
				$errors = $e->getErrors();
			}
		}
		// Include view from Create form
		include 'src/view/organisation/create.php';
		}

		public function editOrganisation()
		{
			$title = 'Edit Organisation';
            
			$nom 	= '';
			$coordonnees  = '';
			$ninea = '';
			$contrat 	= '';
			$formation  = '';
			$quotisation = '';
			$siege  = '';
			$registre = '';
			$regime = '';
			$nombre_employe  = '';
			$date_creation = '';
			$admin_id  = '';
			$ressource_id = '';
			$id = $_GET['id'];

			$organisation = $this->organisationsService->getOrganisation($id);

			$errors = array();

		if (isset($_POST['form-submitted'])) 
		{
			$nom   = isset($_POST['nom'])   ? trim($_POST['nom'])   : null;
			$coordonnees  = isset($_POST['coordonnees'])  ? trim($_POST['coordonnees'])  : null;
			$ninea = isset($_POST['ninea']) ? trim($_POST['ninea']) : null;
			$contrat   = isset($_POST['contrat'])   ? trim($_POST['contrat'])   : null;
			$formation  = isset($_POST['formation'])  ? trim($_POST['formation'])  : null;
			$quotisation = isset($_POST['quotisation']) ? trim($_POST['quotisation']) : null;
			$siege  = isset($_POST['siege'])  ? trim($_POST['siege'])  : null;
			$registre = isset($_POST['registre']) ? trim($_POST['registre']) : null;
			$regime   = isset($_POST['regime'])   ? trim($_POST['regime'])   : null;
			$nombre_employe = isset($_POST['nombre_employe']) ? trim($_POST['nombre_employe']) : null;
			$date_creation  = isset($_POST['date_creation'])  ? trim($_POST['date_creation'])  : null;
			$admin_id = isset($_POST['admin_id']) ? trim($_POST['admin_id']) : null;
			$ressource_id = isset($_POST['ressource_id']) ? trim($_POST['ressource_id']) : null;
			
			try 
			{
				$this->organisationsService->editOrganisation($nom, $coordonnees, $ninea, $contrat, $formation, $quotisation, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id, $id);
				$this->redirect('index.php');
				return;
			}
			catch(ValidationException $e)
			{
				$errors = $e->getErrors();
			}
		}
		include 'src/view/organisation/update.php';
	}

	public function deleteOrganisation()
	{

		$id = isset($_GET['id']) ? $_GET['id'] : null;
		
		if (isset($_POST['form-submitted']))
		{
			$this->repondantsService->deleteRepondant($id);
			$this->organisationsService->deleteOrganisation($id);

			$this->redirect('index.php');
		}

		if (!$id)
		{
			throw new Exception('Internal error');
		}
		$organisation = $this->organisationsService->getOrganisation($id);
		
		include 'src/view/organisation/delete.php';	

	}

	public function showOrganisation()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$errors = array();

		if (!$id)
		{
			throw new Exception('Internal error');
		}
		$organisation = $this->organisationsService->getOrganisation($id);
		$repondant = $this->repondantsService->getRepondant($id);

		include 'src/view/organisation/view.php';
	}

	public function showError($title, $message)
	{
		include 'src/view/error.php';
	}
}

?>
