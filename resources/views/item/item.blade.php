<h1>This is a item section</h1>
<a href="">New item</a>
<a href="">Old item</a>
<table>
    <tr>
        <th>Itme ID</th>
        <th>Itme Name</th>
        <th>Itme quantity</th>
    </tr>
    <?php foreach ($items as $item){?>
    <tr>
        <td><?php echo $item['itemId']?></td>
        <td><?php echo $item['itemName']?></td>
        <td><?php echo $item['itemQuantity']?></td>
    </tr>
    <?php } ?>
</table>
