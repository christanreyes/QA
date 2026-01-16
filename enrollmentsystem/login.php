<?php
session_start();
include 'includes/database.php';

$error = "";

// Create default admin account if no users exist
try {
    $stmt = $pdo->query("SELECT COUNT(*) FROM users");
    $userCount = $stmt->fetchColumn();

    if ($userCount == 0) {
        $defaultUsername = 'admin';
        $defaultPassword = 'admin123';
        $hashedPassword = password_hash($defaultPassword, PASSWORD_DEFAULT);

        $insertStmt = $pdo->prepare("
            INSERT INTO users (username, password, full_name, role, last_login)
            VALUES (:username, :password, :full_name, :role, NOW())
        ");
        $insertStmt->execute([
            'username'  => $defaultUsername,
            'password'  => $hashedPassword,
            'full_name' => '',
            'role'      => ''
        ]);
    }
} catch (Exception $e) {
    // Ignore if table does not exist yet
}

// Handle login
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $full_name = $_POST['full_name'];
    $username  = $_POST['username'];
    $password  = $_POST['password'];
    $role      = $_POST['role'];

    // Check if user already exists
    $stmt = $pdo->prepare("SELECT * FROM users WHERE username = :username");
    $stmt->execute(['username' => $username]);
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        // User exists → verify password
        if (password_verify($password, $user['password'])) {

            // 🔹 UPDATE LOGIN TIME
            $updateStmt = $pdo->prepare("
                UPDATE users SET last_login = NOW() WHERE id = :id
            ");
            $updateStmt->execute(['id' => $user['id']]);

            // Save session
            $_SESSION['user_id']   = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['role']     = $user['role'];

            header("Location: index.php");
            exit();
        } else {
            $error = "Invalid password!";
        }

    } else {
        // User does NOT exist → insert into users table
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $insertStmt = $pdo->prepare("
            INSERT INTO users (username, password, full_name, role, last_login)
            VALUES (:username, :password, :full_name, :role, NOW())
        ");

        $insertStmt->execute([
            'username'  => $username,
            'password'  => $hashedPassword,
            'full_name' => $full_name,
            'role'      => $role
        ]);

        // Get new user ID
        $newUserId = $pdo->lastInsertId();

        // Save session
        $_SESSION['user_id']   = $newUserId;
        $_SESSION['username'] = $username;
        $_SESSION['full_name'] = $full_name;
        $_SESSION['role']     = $role;

        header("Location: index.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">

    <label>Full Name:</label><br>
    <input type="text" name="full_name" required><br><br>

    <label>Username:</label><br>
    <input type="text" name="username" required><br><br>

    <label>Password:</label><br>
    <input type="password" name="password" required><br><br>

    <label>Role:</label><br>
    <select name="role" required>
        <option value="">-- Select Role --</option>
        <option value="admin">Administrators</option>
        <option value="staff">Registrar/</option>
        <option value="user">IT Staff</option>
        <option value="user">Faculty</option>
    </select><br><br>

    <button type="submit">Login</button>
</form>

<p style="color:red;"><?php echo $error; ?></p>

</body>
</html>
