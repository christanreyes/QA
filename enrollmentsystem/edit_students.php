<?php
include 'includes/database.php';

if (!isset($_GET['id'])) {
    die("No student ID provided.");
}

$id = intval($_GET['id']);

// Fetch student data to pre-fill the form
$stmt = $pdo->prepare("SELECT * FROM students WHERE id = ?");
$stmt->execute([$id]);
$student = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$student) {
    die("Student not found.");
}

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Collect form data
    $student_id = $_POST['student_id'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $abbreviations = $_POST['abbreviations'];
    $course = $_POST['course'];
    $year_level = $_POST['year_level'];
    $section = $_POST['section'];
    $status = $_POST['status'];
    $entrance_fee = floatval($_POST['entrance_fee']);
    $id_fee = floatval($_POST['id_fee']);
    $library_fee = floatval($_POST['library_fee']);
    $dept_shirt_fee = floatval($_POST['dept_shirt_fee']);
    $total_fee = $entrance_fee + $id_fee + $library_fee + $dept_shirt_fee;

    // Update query runs only here, after form submission
    $update = $pdo->prepare("UPDATE students SET
        student_id = ?, last_name = ?, first_name = ?, middle_name = ?, abbreviations = ?,
        course = ?, year_level = ?, section = ?, status = ?, 
        entrance_fee = ?, id_fee = ?, library_fee = ?, dept_shirt_fee = ?, total_fee = ?
        WHERE id = ?
    ");

    $update->execute([
        $student_id, $last_name, $first_name, $middle_name, $abbreviations,
        $course, $year_level, $section, $status,
        $entrance_fee, $id_fee, $library_fee, $dept_shirt_fee, $total_fee,
        $id
    ]);

    // Redirect back to student list
    header("Location: all_students.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Edit Student</title>
<link rel="stylesheet" href="assets/css/edit.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<div class="main">
    <div class="header">
        <div class="title">Edit Student</div>
    </div>

    <div class="table-box">
        <form method="POST" class="edit-form">
            <div class="form-row"><label>Student ID</label><input type="text" name="student_id" value="<?= htmlspecialchars($student['student_id']) ?>"></div>
            <div class="form-row"><label>Last Name</label><input type="text" name="last_name" value="<?= htmlspecialchars($student['last_name']) ?>"></div>
            <div class="form-row"><label>First Name</label><input type="text" name="first_name" value="<?= htmlspecialchars($student['first_name']) ?>"></div>
            <div class="form-row"><label>Middle Name</label><input type="text" name="middle_name" value="<?= htmlspecialchars($student['middle_name']) ?>"></div>
            <div class="form-row"><label>Abbreviations</label><input type="text" name="abbreviations" value="<?= htmlspecialchars($student['abbreviations']) ?>"></div>
            <div class="form-row"><label>Course</label><input type="text" name="course" value="<?= htmlspecialchars($student['course']) ?>"></div>
            <div class="form-row"><label>Year Level</label><input type="text" name="year_level" value="<?= htmlspecialchars($student['year_level']) ?>"></div>
            <div class="form-row"><label>Section</label><input type="text" name="section" value="<?= htmlspecialchars($student['section']) ?>"></div>
            <div class="form-row"><label>Status</label><input type="text" name="status" value="<?= htmlspecialchars($student['status']) ?>"></div>
            <div class="form-row"><label>Entrance Fee</label><input type="number" name="entrance_fee" value="<?= htmlspecialchars($student['entrance_fee']) ?>" step="0.01"></div>
            <div class="form-row"><label>ID Fee</label><input type="number" name="id_fee" value="<?= htmlspecialchars($student['id_fee']) ?>" step="0.01"></div>
            <div class="form-row"><label>Library Fee</label><input type="number" name="library_fee" value="<?= htmlspecialchars($student['library_fee']) ?>" step="0.01"></div>
            <div class="form-row"><label>Dept Shirt Fee</label><input type="number" name="dept_shirt_fee" value="<?= htmlspecialchars($student['dept_shirt_fee']) ?>" step="0.01"></div>
            <div class="form-row"><button type="submit" class="save-btn">Update</button></div>
        </form>
    </div>
</div>

</body>
</html>
