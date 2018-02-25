

<?php

  class evenementsController {
    public function index() {
      // we store all the evenements in a variable
      $evenements = evenement::all();
      require_once('views/evenement/index.php');
    }

    public function show() {
      // we expect a url of form ?controller=evenements&action=show&id=x
      // without an id we just redirect to the error page as we need the evenement id to find it in the database
      if (!isset($_GET['id']))
        return call('pages', 'error');

      // we use the given id to get the right evenement
      $evenement = evenement::find($_GET['id']);
      require_once('views/evenement/show.php');
    }
	 public function modifier() {
		 if (!isset($_GET['id'])) {
		
			 return call('pages', 'error');
		 }
		 
		 
		 
	 $evenement= new evenement($_GET['id'],'','','','0','','','');
	 if(!empty($_POST['date_ev']))
		 $evenement->date_ev=$_POST['date_ev'];
	 	 if(!empty($_POST['hum']))
		 $evenement->hum=$_POST['hum'];
	 	 	 if(!empty($_POST['temp']))
		 $evenement->temp=$_POST['temp'];
	 	 	 if(!empty($_POST['etat_parking']))
		 $evenement->etat_parking=$_POST['etat_parking'];
	 	 	 if(!empty($_POST['etat_queue']))
		 $evenement->etat_queue=$_POST['etat_queue'];
		 if(!empty($_POST['equipeone']))
		 $evenement->equipeone=$_POST['equipeone'];
		if(!empty($_POST['equipetwo']))
		 $evenement->equipetwo=$_POST['equipetwo'];
				 $evenement->update();
	     $evenements = evenement::all();
      require_once('views/evenement/index.php');
	 }
 public function supprimer() {
 	evenement::delete($_GET['id']);
 	$evenements = evenement::all();
      require_once('views/evenement/index.php');
 }
 public function formulaire() {
 require_once('views/evenement/Ajout.php');
 }
 public function ajouter() {
$evenement= new evenement('0',$_POST['date_ev'],$_POST['hum'],$_POST['temp'],$_POST['etat_parking'],$_POST['etat_queue'],$_POST['equipeone'],$_POST['equipetwo']);
$evenement->add();
$evenements = evenement::all();
      require_once('views/evenement/index.php');
 }
  }
?>