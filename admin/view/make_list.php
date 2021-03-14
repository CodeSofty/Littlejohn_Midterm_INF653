
<?php include('header.php');?>




<table class="table table-info table-striped table-hover table-bordered">
    <caption>Zippy Used Auto Inventory</caption>
    <thead>
        <tr>
        <th scope="col">Make List</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($makes as $make) : ?>
        <tr>
        <td><?php echo $make['Make']; ?></td>
        <td>  <form action="." method="post">
                <input type="hidden" name="action" value="delete_make">
                <input type="hidden" name="make_id" value="<?= $make['Make']?>">
                <button type="button" class="btn btn-danger">Remove</button>
            </form></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>



<?php include('footer.php');?>