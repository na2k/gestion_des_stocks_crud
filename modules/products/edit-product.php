<?php
include_once dirname(__FILE__) . "./../../inc/head.php";
?>

<?php if (!isset($product) OR $product === false): ?>
<p>Aucun produit ne correspond votre recherche.</p>
<?php endif; ?>

<?php if(isset($product) AND  $product !== false): ?>

<form method="post" action="index.php" class="create f-col">
  <input type="hidden" name="id" value="<?php echo $product->id ?>">
  <label for="name">Nom</label>
  <input id="nom" name="nom" type="text" value="<?php echo $product->nom ?>" required>
  <label for="prix">Prix</label>
  <input id="prix" name="prix" type="number" value="<?php echo $product->prix ?>" required>
  <label for="description">Description</label>
  <input id="description" name="description" type="text" value="<?php echo $product->description ?>"
  class="input">
  <label for="image">Image</label>
  <input id="image" name="image" type="file" class="input" value="<?php echo $product->image ?>">
  <div class="f-row">
    <input name="update_product" type="submit" value="Modifier produit" class="btn">
  </div>
</form>

<?php endif; ?>

<?php
include_once dirname(__FILE__) . "./../../inc/footer.php";
?>
