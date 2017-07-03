<?php
  class ProductsController {
    public function allProducts() {
      //get products
      $products = Product::selectAll();
      require_once('views/products/list.php');
    }

    // ?controller=products&action=byId&id=x
    public function byId() {
      if (!isset($_GET['id']))
        return call('pages', 'error');

      $product = Product::selectById($_GET['id']);
      require_once('views/products/byId.php');
    }
  }
?>