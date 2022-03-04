<?php
//require_once $_SERVER['DOCUMENT_ROOT'] . 'vendor/autoloader.php';
require_once 'src/model/OrganisationsService.php';

class OrganisationController 
{

	private $organisationsService = null;

	public function __construct()
	{
		$this->organisationsService = new OrganisationsService();
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
		include  'src/view/organisations.php';
	}

	public function saveOrganisation()
	{
		$title = 'Create New Organisation';

		$nom 	= '';
		$coordonnees  = '';
		$ninea = '';
		$region 	= '';
		$departement  = '';
		$commune = '';
		$quartier 	= '';
		$siege  = '';
		$registre = '';
		$regime = '';
		$nombre_employe  = '';
		$date_creation = '';
		$admin_id  = '';
		$ressource_id = '';

		$errors = array();

		if (isset($_POST['form-submitted']))
		{
			$non   = isset($_POST['nom'])   ? trim($_POST['nom'])   : null;
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
				$this->organisationsService->createNewOrganisation($nom, $coordonnees, $ninea, $region, $departement, $commune, $quartier, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id);
				$this->redirect('index.php');
				return;
			}
			catch(ValidationException $e)
			{
				$errors = $e->getErrors();
			}
		}
		// Include view from Create form
		include '/view/create.php';
		//require('view/create.php');
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

			$contact = $this->organisationsService->getOrganisation($id);

			$errors = array();

		if (isset($_POST['form-submitted'])) 
		{
			$non   = isset($_POST['nom'])   ? trim($_POST['nom'])   : null;
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
				$this->organisationsService->editOrganisation($nom, $coordonnees, $ninea, $region, $departement, $commune, $quartier, $siege, $registre, $regime, $nombre_employe, $date_creation, $admin_id, $ressource_id, $id);
				$this->redirect('index.php');
				return;
			}
			catch(ValidationException $e)
			{
				$errors = $e->getErrors();
			}
		}
		include ROOT_PATH . 'view/update.php';
	}

	public function deleteOrganisation()
	{

		$id = isset($_GET['id']) ? $_GET['id'] : null;
		
		if (isset($_POST['submit']) == true)
		{
			$this->organisationsService->deleteOrganisation($id);

			$this->redirect('index.php');
		}

		if (!$id)
		{
			throw new Exception('Internal error');
		}
		$contact = $this->organisationsService->getOrganisation($id);
		
		include ROOT_PATH . 'view/delete.php';	

	}

	public function showOrganisation()
	{
		$id = isset($_GET['id']) ? $_GET['id'] : null;

		$errors = array();

		if (!$id)
		{
			throw new Exception('Internal error');
		}
		$contact = $this->organisationsService->getOrganisation($id);

		include ROOT_PATH . 'view/view.php';
	}

	public function showError($title, $message)
	{
		include ROOT_PATH . 'view/error.php';
	}
}

?>
