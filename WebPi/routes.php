<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'evenement':
        // we need the model to query the database later in the controller
        require_once('models/evenement.php');
        $controller = new evenementsController();
      break;
      case 'couleur':
        // we need the model to query the database later in the controller
        require_once('models/couleur.php');
        $controller = new couleursController();
      break;
    }

    $controller->{ $action }();
  }

  // we're adding an entry for the new controller and its actions
  $controllers = array('pages' => ['home', 'error'],
                       'evenement' => ['index', 'show','modifier','supprimer','ajouter','formulaire'],
                       'couleur' => ['index']

                        );

  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('pages', 'error');
    }
  } else {
    call('pages', 'error');
  }
?>