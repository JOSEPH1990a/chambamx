<?php 
require_once("include/initialize.php"); 
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) { 
	case 'apply' :
        $title="Submit Application";	
		$content='applicationform.php';		
		break;
	case 'login' : 
        $title="Login";	
		$content='login.php';		
		break;
	case 'company' :
        $title="Company";	
		$content='company.php';		
		break;
    case 'employer' :
        $title="Employer";	
        $content='employer.php';		
        break;
	case 'hiring' :
		$title = isset($_GET['search']) ? 'Hiring in '.$_GET['search'] :"Hiring"; 
		$content='hirring.php';		
		break;		
	case 'category' :
        $title='Buscar por '. $_GET['search'];	
		$content='category.php';		
		break;
	case 'viewjob' :
        $title="Job Details";	
		$content='viewjob.php';		
		break;
	case 'success' :
        $title="Éxito";	
		$content='success.php';		
		break;
	case 'register' :
        $title="Nuevo registro";	
		$content='register.php';		
		break;
	case 'Contact' :
        $title='Contact Us';	
		$content='Contact.php';		
		break;	
	case 'About' :
        $title='About Us';	
		$content='About.php';		
		break;	
	case 'advancesearch' :
        $title='Búsqueda Avanzada';	
		$content='advancesearch.php';		
		break;	

	case 'result' :
        $title='Búsqueda Avanzada';	
		$content='advancesearchresult.php';		
		break;
	case 'search-company' :
        $title='Buscar por Empresa';	
		$content='searchbycompany.php';		
		break;	
	case 'search-function' :
        $title='Buscar por Funcion';	
		$content='searchbyfunction.php';		
		break;	
	case 'search-jobtitle' :
        $title='Buscar por titulo empleo';	
		$content='searchbytitle.php';		
		break;						
	default :
	    $active_home='active';
	    $title="Home";	
		$content ='home.php';		
}
require_once("theme/templates.php");
?>