<?php
    require_once './inc/functions.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['createid'])) 
    {
        $createid = $_POST['createid'];
        $controllers->equipment()->create_equipment($createid);
    }

    $equipment = $controllers->equipment()->get_all_equipments();

?>  


<div class="container-fluid mt-3 p-5"> 
    <h1 class="text-center"> Add Equipment </h1>

    <form>
        <div class="mb-3">
            <label for="exampleInputProduct" class="form-label">Product Name</label>
            <input type="text" class="form-control" id="exampleProductName" aria-describedby="ProductName">
            <div id="ProductName" class="form-text"></div>
        </div>

        <div class="mb-3">
            <label for="ForProductDescription" class="form-label">Product Description</label>
            <textarea class="" id="ForProductDescription" name="ProductDescriptionBox" rows="5" cols="50">Enter the items description here... </textarea>
        </div>

        <div class="mb-3">
            <label for="ForProductImage" class="form-label">Product Image URL</label>
            <textarea class="" id="ForProductImageURL" name="ForProductImageURL" rows="5" cols="50">Enter the items image URL here... </textarea>
        </div>

        <input type="hidden" name="createid" value="<?= $equip['id'] ?>">
        <button type="submit" class="btn btn-primary" value="Create">Submit</button>
    </form>
</div>

