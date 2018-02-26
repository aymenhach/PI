

<?php

  class couleursController {
    public function index() {
      // we use the given id to get the right couleur
      $couleur = couleur::find();
      require_once('views/couleur/index.php');

	 $couleur= new couleur('','');
		 if(!empty($_POST['equipeone']))
		 $couleur->equipeone=$_POST['equipeone'];
		if(!empty($_POST['equipetwo']))
		 $couleur->equipetwo=$_POST['equipetwo'];
				 $couleur->update();
				 
	     $couleurs = couleur::all();
      require_once('views/couleur/index.php');
	 }

  }
?>
