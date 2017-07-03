<?php
  function call($controller, $action) {
    require_once('controllers/' . $controller . '_controller.php');

    switch($controller) {
      case 'pages':
        $controller = new PagesController();
      break;
      case 'products':
        require_once('models/product.php');
        $controller = new ProductsController();
      break;
    }

    $controller->{ $action }();
  }

  $controllers = array('pages' => ['home', 'error'],
                       'products' => ['allProducts', 'byId']);

  if (array_key_exists($controller, $controllers) && in_array($action, $controllers[$controller])) {
      call($controller, $action);
  } else {
    call('pages', 'error');
  }
?>
