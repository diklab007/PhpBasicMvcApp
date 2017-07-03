<DOCTYPE html>
<html>
  <head>
   <title> basic PHP app</title>
  </head>
  <body>
    <header>
     <a href='?controller=products&action=allProducts'>Products</a>
     simple header menu
    </header>
    <hr/>
    <?php require_once('routes.php'); ?>

    <hr/>
    <footer>
        My simple footer | Copyright dikla
    </footer>
  <body>
<html>