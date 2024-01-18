<?php
    // Include the functions file for necessary functions and classes
    require_once './inc/functions.php';

    require_once './classes/equipmentController.php';

    // Handle delete request
    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteId'])) 
    {
        $deleteId = $_POST['deleteId'];
        $controllers->equipment()->delete_equipment($deleteId); 
    }

    // Retrieve all equipment data using the equipment controller
    $equipment = $controllers->equipment()->get_all_equipments();
?>

<!-- HTML for displaying the equipment inventory -->
<div class="container mt-4 pb-3">
    <h2>Equipment Inventory</h2>
    <a href="add_equipment.php" class="btn btn-primary mb-2" target="_blank">Add Equipment</a>
    <table class="table table-striped"> 
            <tr>
                <th>Image</th> 
                <th>Name</th> 
                <th>Description</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($equipment as $equip): ?> <!-- Loop through each equipment item -->
                <tr>
                    <td>
                        <img src="<?= htmlspecialchars($equip['image'])?>"
                             alt="Image of <?= htmlspecialchars($equip['description']) ?>" 
                             style="width: 100px; height: auto;"> 
                             <!--Display equipment image with escaping for security -->
                    </td>
                    <td><?= htmlspecialchars($equip['name']) ?></td> 
                    <td><?= htmlspecialchars($equip['description']) ?></td> 

                    <td>
                        <form method="post">
                            <input type="hidden" name="deleteId" value="<?= $equip['id'] ?>">
                            <input type="submit" class="btn btn-danger mb-2" value="Delete">
                        </form>
                        <button type="submit" class="btn btn-primary"> Edit </button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
