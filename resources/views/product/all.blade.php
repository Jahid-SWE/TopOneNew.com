<h3>This is product page</h3>
<hr/>
<a href="">All Product</a>
<a href="">New Product</a>
<table border="1" width="800 ">
    <tr>
        <th>Product ID</th>
        <th>Product Name</th>
        <th>Product price</th>
        <th>Product Description</th>
    </tr>

    <?php foreach ($products as $product){ ?>
    <tr >
       <td align="center"><?php echo $product['id']?></td>
       <td align="center"><?php echo $product['name']?></td>
       <td align="center"><?php echo $product['price']?></td>
       <td align="center"><?php echo $product['description']?></td>
    </tr>
    <?php } ?>
</table>
