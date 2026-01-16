<?php
session_start();
include 'includes/database.php';

// Redirect if not logged in
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

// Fetch users
$stmt = $pdo->prepare("SELECT id, username, full_name, role, last_login FROM users ORDER BY id DESC");
$stmt->execute();
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
    <link rel="stylesheet" href="assets/css/user_list.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<div class="container">

    <!-- HEADER -->
    <div class="header">
        <h2>User List</h2>

        <div>
            Logged in as: 
            <b><?php echo htmlspecialchars($_SESSION['full_name']); ?></b> 
            (<?php echo htmlspecialchars($_SESSION['role']); ?>)
            | <a href="logout.php">Logout</a>
        </div>
    </div>

    <!-- CONTENT -->
    <div class="content-box">
        <table>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
                <th>Last Login</th>
            </tr>

            <?php if (count($users) > 0): ?>
                <?php foreach ($users as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['id']); ?></td>
                        <td><?php echo htmlspecialchars($row['username']); ?></td>
                        <td><?php echo htmlspecialchars($row['full_name']); ?></td>
                        <td><?php echo htmlspecialchars($row['role']); ?></td>
                        <td><?php echo htmlspecialchars($row['last_login']); ?></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="5" class="no-record">No user records found</td>
                </tr>
            <?php endif; ?>

        </table>
    </div>

</div>

</body>
</html>
