<?php
include 'includes/database.php';

// Handle drop action: move student from `students` to `dropped_students`
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);
    try {
        $pdo->beginTransaction();

        // fetch student
        $s = $pdo->prepare("SELECT * FROM students WHERE id = ?");
        $s->execute([$id]);
        $student = $s->fetch(PDO::FETCH_ASSOC);

        if ($student) {
            // insert into dropped_students with only the columns that exist
            $ins = $pdo->prepare("INSERT INTO dropped_students
(student_id, last_name, first_name, middle_name, abbreviations, course, year_level, section)
VALUES
(:student_id, :last_name, :first_name, :middle_name, :abbreviations, :course, :year_level, :section)");

            $ins->execute([
                'student_id' => isset($student['student_id']) ? $student['student_id'] : '',
                'last_name' => isset($student['last_name']) ? $student['last_name'] : '',
                'first_name' => isset($student['first_name']) ? $student['first_name'] : '',
                'middle_name' => isset($student['middle_name']) ? $student['middle_name'] : '',
                'abbreviations' => isset($student['abbreviations']) ? $student['abbreviations'] : '',
                'course' => isset($student['course']) ? $student['course'] : '',
                'year_level' => isset($student['year_level']) ? $student['year_level'] : '',
                'section' => isset($student['section']) ? $student['section'] : ''
            ]);

            // delete from students
            $d = $pdo->prepare("DELETE FROM students WHERE id = ?");
            $d->execute([$id]);
        }

        $pdo->commit();
    } catch (Exception $e) {
        if ($pdo->inTransaction()) $pdo->rollBack();
        // fail silently for UI, but you may log $e->getMessage()
    }

    header('Location: drop_students.php');
    exit;
}

// Handle permanent removal of a dropped student
if (isset($_GET['remove']) && !empty($_GET['remove'])) {
    $removeStudentId = $_GET['remove'];
    try {
        $del = $pdo->prepare("DELETE FROM dropped_students WHERE student_id = ?");
        $del->execute([$removeStudentId]);
    } catch (Exception $e) {
        // optionally log the error
    }
    header('Location: drop_students.php');
    exit;
}

$search = "";
if (isset($_GET['search']) && $_GET['search'] != "") {
    $search = $_GET['search'];
    $stmt = $pdo->prepare("SELECT * FROM dropped_students WHERE student_id LIKE :s ORDER BY dropped_at DESC");
    $stmt->execute(['s' => "%$search%"]);
} else {
    $stmt = $pdo->query("SELECT * FROM dropped_students ORDER BY dropped_at DESC");
}

$students = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dropped Students</title>
<link rel="stylesheet" href="assets/css/drop_students.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<div class="main">
    <div class="header">
        <div class="title">Dropped Students</div>
        <form method="GET" class="search-box">
            <input type="text" name="search" placeholder="Search by Student ID" value="<?= htmlspecialchars($search) ?>">
            <button type="submit">🔍</button>
        </form>
    </div>

    <div class="table-box">
        <table class="student-table">
            <thead>
                <tr>
                    <th>Student ID</th>
                    <th>Full Name</th>
                    <th>Course</th>
                    <th>Year</th>
                    <th>Section</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php if(count($students) > 0): ?>
                    <?php foreach($students as $row): ?>
                        <tr>
                            <td><?= htmlspecialchars($row['student_id']); ?></td>
                            <td><?= htmlspecialchars($row['last_name']) ?>, <?= htmlspecialchars($row['first_name']) ?> <?= htmlspecialchars($row['middle_name']); ?></td>
                            <td><?= isset($row['course']) ? htmlspecialchars($row['course']) : '-'; ?></td>
                            <td><?= isset($row['year_level']) ? htmlspecialchars($row['year_level']) : '-'; ?></td>
                            <td><?= isset($row['section']) ? htmlspecialchars($row['section']) : '-'; ?></td>
                            <td>
                                <a href="drop_students.php?remove=<?= $row['student_id']; ?>" 
                                   onclick="return confirm('Permanently remove this dropped student? This cannot be undone.');"
                                   style="padding:5px 10px; background:#e53935; color:white; text-decoration:none; border-radius:4px;">Remove</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="6" style="text-align:center;">No dropped students found</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>

</body>
</html>

<script>
// Clear search query from URL after load so refresh returns to full list
window.addEventListener('load', function(){
    try {
        var input = document.querySelector('input[name="search"]');
        if (input && input.value.trim() !== '') {
            var p = window.location.pathname;
            window.history.replaceState(null, '', p);
            // clear the input to avoid browser restoring the value on refresh
            try { input.value = ''; input.setAttribute('autocomplete','off'); } catch(e){}
        }
    } catch(e){}
});
</script>
