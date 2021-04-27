<h1>This is a item section</h1>
<a href="">New item</a>
<a href="">Old item</a>
<table>
    <tr>
        <th>Bus type </th>
        <th>Bus name</th>
    </tr>
    <?php foreach ($bus as $buss){?>
    <tr>
        <td><?php echo $buss['type']?></td>
        <td><?php echo $buss['size']?></td>
    </tr>
    <?php } ?>
</table>

