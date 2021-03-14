
<?php include('header.php');?>

<form action = "." method="get">
    <input type="hidden" name="action" value = "get_type">
    <select class="select-box" name="type_id">
        <option value ="0">View All Types</option selected>
        <?php foreach ($types as $type) : ?>
            <?php if ($type_id == $type['ID']) { ?>
            <option value="<?= $type['ID']?>" >
            <?php } else { ?>
            <option value ="<?=$type['ID']?>">
            <?php }?>
            <?= $type['Type'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Go</button>
</form>



<table class="table table-info table-striped table-hover table-bordered">
    <caption>Zippy Used Auto Inventory</caption>
    <thead>
        <tr>
        <th scope="col">Types List</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($types as $type) : ?>
        <tr>
        <td><?php echo $type['Type']; ?></td>
        <td>  <form action="." method="post">
                <input type="hidden" name="action" value="delete_type">
                <input type="hidden" name="type_id" value="<?= $type['Type']?>">
                <button type="button" class="btn btn-danger">Remove</button>
            </form></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>


<section id="add" class="add">
    <h2>Add Type:</h2>
    <form action="." method="post" id="add__form" class="add__form">
        <input type="hidden" name="action" value="add_type">
        <div class="add__inputs">
            <label>Type Name:</label>
            <input type="text" name="type_name" maxlength 20 autofocus required>
        </div>
        <div class="add__type">
            <button type="submit" class="add-button bold">Add Type</button>
        </div>
    </form>
</section>

<p><a href=".">View/Add Vehicles</a></p>
<?php include('footer.php');?>