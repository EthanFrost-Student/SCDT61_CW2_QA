<?php
session_start();

// Check if user is not logged in or does not have the role ID of '1'
if (!isset($_SESSION['user_id']) || !isset($_SESSION['Role_ID']) || $_SESSION['Role_ID'] != '1') {
    header('location: login.php');
    exit;
}

?>
<h2>Welcome, <?php echo $_SESSION['Admin']; ?></h2>
