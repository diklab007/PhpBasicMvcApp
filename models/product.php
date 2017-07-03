<?php
  class Product {
    // we define 3 attributes
    // they are public so that we can access them using $products->name directly
    public $id;
    public $name;
    public $price;

    public function __construct($id, $name, $price) {
      $this->id      = $id;
      $this->name  = $name;
      $this->price = $price;
    }

    public static function all() {
      $list = [];
      $db = Db::getInstance();
      $req = $db->query('SELECT * FROM products');

      // we create a list of Post objects from the database results
      foreach($req->fetchAll() as $product) {
        $list[] = new Product($product['id'], $post['name'], $post['price']);
      }

      return $list;
    }

    public static function find($id) {
      $db = Db::getInstance();
      // we make sure $id is an integer
      $id = intval($id);
      $req = $db->prepare('SELECT * FROM products WHERE id = :id');
      // the query was prepared, now we replace :id with our actual $id value
      $req->execute(array('id' => $id));
      $product = $req->fetch();

      return new Product($product['id'], $product['name'], $product['price']);
    }
  }
?>