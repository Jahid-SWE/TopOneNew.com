<h1>This is a category pages</h1>

<a href="" >New Category</a>
<a href="" >Old Category</a>
<table border="1" width="1000">
    <tr>
        <th>Category Name</th>
        <th>Category Description</th>
    </tr>
    <?php foreach ($categories as $category){ ?>
    <tr>

        <td align="center"><?php echo $category['categoryName']?></td>
        <td align="center"><?php echo $category['categoryDescription']?></td>
    </tr>
    <?php } ?>
</table>
