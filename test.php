<?php
// Include the functions file for necessary functions and classes
require_once './inc/functions.php';
require_once './classes/equipmentController.php';

// Function to delete equipment - assuming it's part of a class
function delete_equipment(int $id) {
    // SQL query to delete equipment data by ID
    // ... existing code ...
}

// Handle delete request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['deleteId'])) {
    $deleteId = $_POST['deleteId'];
    delete_equipment($deleteId);
    // You might want to add redirection or a message here
}

// Retrieve all equipment data using the equipment controller
$equipment = $controllers->equipment()->get_all_equipments();
?>

<div class="container mt-4 pb-3">
    <h2>Equipment Inventory</h2>
    <table class="table table-striped"> 
        <!-- ... existing table structure ... -->

        <tbody>
            <?php foreach ($equipment as $equip): ?>
                <tr>
                    <!-- ... existing columns for image, name, and description ... -->

                    <td>
                        <!-- Delete form for each item -->
                        <form method="post">
                            <input type="hidden" name="deleteId" value="<?= $equip['id'] ?>">
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </form>
                        <button type="button" class="btn btn-primary">Edit</button>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
