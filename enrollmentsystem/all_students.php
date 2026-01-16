<?php
include 'includes/database.php';

// Search functionality
$search = "";
if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];
        $stmt = $pdo->prepare("SELECT * FROM students WHERE student_id LIKE :s ORDER BY id DESC");
    $stmt->execute(['s' => "%$search%"]);
} else {
    $stmt = $pdo->query("SELECT * FROM students ORDER BY id DESC");
}

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>All Students</title>
<link rel="stylesheet" href="assets/css/all_students.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<div class="main">


    <!-- HEADER -->
    <div class="header">
        <div class="title">All Students</div>
        <form method="GET" class="search-box">
            <input type="text" name="search" placeholder="Search by Student ID" value="<?= htmlspecialchars($search) ?>">
            <button type="submit">🔍</button>
        </form>
    </div>

    <!-- TABLE -->
    <div class="table-box">
    <table class="student-table">
        <thead>
            <tr>
                <th>Student ID</th>
                <th>Last Name</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Abbreviations</th>
                <th>Course</th>
                <th>Year</th>
                <th>Section</th>
                <th>Fees</th>
                <th>Total</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php if(count($students) > 0): ?>
                <?php foreach($students as $row): ?>
                <tr>
                    <td><?= htmlspecialchars($row['student_id']); ?></td>
                    <td><?= htmlspecialchars($row['last_name']); ?></td>
                    <td><?= htmlspecialchars($row['first_name']); ?></td>
                    <td><?= htmlspecialchars($row['middle_name']); ?></td>
                    <td><?= htmlspecialchars($row['abbreviations']); ?></td>
                    <td><?= htmlspecialchars($row['course']); ?></td>
                    <td><?= htmlspecialchars($row['year_level']); ?></td>
                    <td><?= htmlspecialchars($row['section']); ?></td>
                    <td>
                        <?php
                            $fees = [];
                            if ($row['entrance_fee'] > 0) $fees[] = "Entrance";
                            if ($row['id_fee'] > 0) $fees[] = "ID";
                            if ($row['library_fee'] > 0) $fees[] = "Library";
                            if ($row['dept_shirt_fee'] > 0) $fees[] = "Shirt";
                            echo $fees ? implode(", ", $fees) : "-";
                        ?>
                    </td>
                    <td><?= number_format($row['total_fee'], 2); ?></td>
                    <td>
                        <a href="edit_students.php?id=<?= $row['id']; ?>" 
                           style="padding:5px 10px; background:#2196F3; color:white; text-decoration:none; border-radius:4px; margin-right:5px;">
                           Edit
                        </a>
                        <a href="dropped.php?id=<?= $row['id']; ?>"
                onclick="return confirm('Are you sure you want to drop this student?');"
                style="padding:5px 10px; background:red; color:white; text-decoration:none; border-radius:4px;">
                Drop
                </a>
                    </td>
                </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="12" style="text-align:center;">No student records found</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
    </div>

</div>

</body>
</html>

<script>
// If a search was performed, remove the query string so a refresh shows all students
window.addEventListener('load', function(){
    try {
        var input = document.querySelector('input[name="search"]');
        if (input && input.value.trim() !== '') {
            var p = window.location.pathname;
            window.history.replaceState(null, '', p);
            // clear the input to avoid browser restoring the value on refresh
            try { input.value = ''; input.setAttribute('autocomplete','off'); } catch(e){}
        }
    } catch (e){}
});
</script>
