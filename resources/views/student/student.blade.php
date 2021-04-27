<h1>studne class</h1>
<a href=""> Student </a>
<a href=""> Student-Details</a>
<table>
    <tr>
        <th>Name</th>
        <th>id</th>
        <th>course</th>
    </tr>
    <?php foreach ($students as $student){?>
    <tr>
        <td><?php echo $student['name']?></td>
        <td><?php echo $student['id']?></td>
        <td><?php echo $student['course']?></td>
    </tr>
    <?php } ?>
</table>
