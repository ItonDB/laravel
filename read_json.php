<div>Read JSON</div>
<?php
$json = file_get_contents('product.json'); //อ่านไฟล์
$data = json_decode($json, true); //ถอดรหัส
?>
<!-- แสดงผล -->
<table border="1">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
    </tr>
    <?php
    foreach ($data as $product) { // วนลูป ?> 
        <tr>
            <td><?php echo $product['id'] ?></td>
            <td><?php echo $product['name'] ?></td>
            <td><?php echo $product['price'] ?></td>
        </tr>
    <?php } ?>
</table>