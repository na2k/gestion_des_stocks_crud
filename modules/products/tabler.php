<h3 class="title">Liste des produits</h3>

<?php if (isset($products) && !count($products)): ?>
    <p>Aucun produit pour le moment...</p>
<?php endif; ?>

<?php if (isset($products) && count($products)): ?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>"
class="form list-product">
    <table id="products" class="tabler products">
        <thead>
            <tr>
            <?php foreach ($products[0] as $prop => $val) {
                echo "<td>$prop</td>";
            } ?>
                <td class="update"><span>update</span></td>
                <td class="delete">
                  <input type="submit" name="delete_products"
                  value="delete" class="tabler-btn">
                </td>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($products as $product) {
            echo "<tr data-id-product=\"$product->id\">";
            foreach ((array)$product as $prop => $val) {
                $val = isset($val) ? $val : "N.R";
                echo "<td>" . $val . "</td>";
            }
                echo "<td class=\"update\">
                    <a class=\"tabler-btn\" href=\"modules/products/edit-product.php?id=$product->id\">edit</a>
                </td>";
                echo "<td class=\"delete\">
                    <input name=\"delete_product_ids[]\" type=\"checkbox\" value=\"$product->id\" />
                </td>";
            echo "</tr>";
        } ?>
        </tbody>
    </table>
</form>
<?php endif; ?>
