<?php include('header.php');?>





    <form action="." method="post" id="add__form" class="add__form">
        <input type="hidden" name="action" value="add_vehicle">


        <input type="hidden" name="action" value = "get_make">
    <select class="select-box" name="make_id">
        <option value ="0">View All Makes</option>
        <?php foreach ($makes as $make) : ?>
            <?php if ($make_id == $make['ID']) { ?>
            <option value="<?= $make['ID']?>" selected>
            <?php } else { ?>
            <option value ="<?=$make['ID']?>">
            <?php }?>
            <?= $make['Make'] ?>
            </option>
        <?php endforeach; ?>



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



        <input type="hidden" name="action" value = "get_class">
    <select class="select-box" name="class_id">
        <option value ="0">View All Classes</option>
        <?php foreach ($classes as $class) : ?>
            <?php if ($class_id == $class['ID']) { ?>
            <option value="<?= $class['ID']?>" selected>
            <?php } else { ?>
            <option value ="<?=$class['ID']?>">
            <?php }?>
            <?= $class['Class'] ?>
            </option>
        <?php endforeach; ?>




        <div class="add__inputs">
            <label>Year:</label>
            <input type="text" name="vehicle_year" maxlength 20 autofocus required>
            <label>Model:</label>
            <input type="text" name="vehicle_model" maxlength 20 autofocus required>
            <label>Price:</label>
            <input type="text" name="vehicle_price" maxlength 20 autofocus required>
        </div>
        <div class="add__type">
            <button type="submit" class="add-button bold">Add Vehicle</button>
        </div>
    </form>
</section>




<p><a href=".">View Vehicles</a></p>
<?php include('footer.php');?>