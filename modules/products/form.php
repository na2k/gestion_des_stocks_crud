<<<<<<< HEAD
<h3 class="title">
    <span>Ajouter un produit</span>
</h3>
<?php if (isset($msg_crud)) {
    echo "<p class=\"msg\">$msg_crud</p>";
}?>

<form method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="create f-col">
    <input name="nom" type="text" placeholder="Nom*" class="input" required>
    <input name="prix" type="number" class="input" placeholder="Prix*" required>
    <input name="description" type="text" placeholder="Description" class="input">
    <input name="image" type="file" placeholder="image" size=50 class="input">
    <div class="f-row">
      <input name="create_product" type="submit" value="Ajouter produit" class="btn">
    </div>
    <hr>
</form>
=======
<h3 class="title">
    <span>Ajouter un produit</span>
</h3>
<?php if (isset($msg_crud)) {
    echo "<p class=\"msg\">$msg_crud</p>";
}?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" class="create f-col">
    <input name="nom" type="text" placeholder="Nom" class="input" required>
    <input name="prix" type="number" class="input" placeholder="Prix" required>
    <input name="description" type="text" placeholder="Description" class="input">
    <input name="image" type="file" placeholder="image" size=50 class="input">
    <div class="f-row">
      <input name="create_product" type="submit" value="Ajouter produit" class="btn">
    </div>
</form>
>>>>>>> 806f05f152938736da8c82f2896c119a77d220d4
