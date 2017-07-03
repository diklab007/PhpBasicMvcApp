<p>Here is a list of all products:</p>

<?php foreach($products as $product) { ?>
  <p>
    <?php echo $product->name; ?>
    <a href='?controller=products&action=show&id=<?php echo $product->id; ?>'>See content</a>
  </p>
<?php } ?>