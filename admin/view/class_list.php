<?php include('header.php');?>

<form action = "." method="get">
    <input type="hidden" name="action" value = "get_classes">
    <select class="select-box" name="class_id">
        <option value ="0">View All Classes</option selected>
        <?php foreach ($classes as $class) : ?>
            <?php if ($class_id == $class['ID']) { ?>
            <option value="<?= $class['ID']?>" >
            <?php } else { ?>
            <option value ="<?=$class['ID']?>">
            <?php }?>
            <?= $class['Class'] ?>
            </option>
        <?php endforeach; ?>
    </select>
    <button>Go</button>
</form>



<table class="table table-info table-striped table-hover table-bordered">
    <caption>Zippy Used Auto Inventory</caption>
    <thead>
        <tr>
        <th scope="col">Class List</th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($classes as $class) : ?>
        <tr>
        <td><?php echo $class['Class']; ?></td>
        <td>  <form action="." method="post">
                <input type="hidden" name="action" value="delete_class">
                <input type="hidden" name="class_id" value="<?= $class['Class']?>">
                <button type="button" class="btn btn-danger">Remove</button>
            </form></td>
        </tr>
        <?php endforeach; ?>
    </tbody>
    </table>


<section id="add" class="add">
    <h2>Add Class:</h2>
    <form action="./controllers/types.php" method="post" id="add__form" class="add__form">
        <input type="hidden" name="action" value="add_class">
        <div class="add__inputs">
            <label>Class Name:</label>
            <input type="text" name="class_name" maxlength 20 autofocus required>
        </div>
        <div class="add__type">
            <button type="submit" class="add-button bold">Add Class</button>
        </div>
    </form>
</section>


<?php include('footer.php');?>