<?php
// sidebar.php - consistent sidebar for all pages
// Determine active page
$current = basename($_SERVER['PHP_SELF']);
?>
<link rel="stylesheet" href="assets/css/sidebar.css">
<div class="sidebar">
    <div class="logo">
        <!-- Place your logo image at assets/img/logo.png -->
        <img src="assets/img/Add_a_subheading-removebg-preview.png" alt="Logo">
    </div>
    <nav>
        <a href="index.php" class="<?= $current === 'index.php' ? 'active' : '' ?>">Dashboard</a>
        <a href="add_students.php" class="<?= $current === 'add_students.php' ? 'active' : '' ?>">Add Student</a>
        <a href="all_students.php" class="<?= $current === 'all_students.php' ? 'active' : '' ?>">All Student</a>
        <a href="drop_students.php" class="<?= $current === 'drop_students.php' ? 'active' : '' ?>">Drop Student</a>
        <a href="user.php" class="<?= $current === 'user.php' ? 'active' : '' ?>">User</a>
    </nav>
</div>
