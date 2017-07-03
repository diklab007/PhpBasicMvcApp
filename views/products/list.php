<div>List of all products:</div>

<?php foreach($products as $product) { ?>
  <ul>
    <li>
      <a 
       href='?controller=products&action=byId&id=<?php echo $product->id; ?>'>
        <?php echo $product->name ?>
      </a>
    </li>
  </ul>
<?php } ?>