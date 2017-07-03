<?php
  class Product {
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price) {
      $this->id    = $id;
      $this->name  = $name;
      $this->price = $price;
    }

    public static function selectAll() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM products');

      // create a list of products objects from the database results
      foreach($req->fetchAll() as $product) {
        $list[] = new Product($product['id'], $product['name'], $product['price']);
      }

      return $list;
    }

    public static function selectById($id) {
      $db = Db::getInstance();
      
      //get id
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM products WHERE id = :id');
      $req->execute(array('id' => $id));
      $product = $req->fetch();

      return new Product($product['id'], $product['name'], $product['price']);
    }
  }
?>