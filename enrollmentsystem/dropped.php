<?php
include 'includes/database.php';

if (!isset($_GET['id']) || empty($_GET['id'])) {
    header("Location: all_students.php");
    exit;
}

$id = (int)$_GET['id'];

try {
    // Fetch student data
    $fetch = $pdo->prepare("SELECT * FROM students WHERE id = ?");
    $fetch->execute([$id]);
    $student = $fetch->fetch(PDO::FETCH_ASSOC);

    if ($student) {
        // Copy student to dropped_students with only the columns that exist in dropped_students table
        $copy = $pdo->prepare("
            INSERT INTO dropped_students 
                (student_id, last_name, first_name, middle_name, abbreviations, course, year_level, section)
            VALUES 
                (?, ?, ?, ?, ?, ?, ?, ?)
        ");
        $copy->execute([
            $student['student_id'],
            $student['last_name'],
            $student['first_name'],
            $student['middle_name'],
            isset($student['abbreviations']) ? $student['abbreviations'] : '',
            $student['course'],
            $student['year_level'],
            $student['section']
        ]);

        // Delete from students
        $delete = $pdo->prepare("DELETE FROM students WHERE id = ?");
        $delete->execute([$id]);
    }

    // Redirect to dropped students page
    header("Location: drop_students.php");
    exit;
} catch (PDOException $e) {
    die("Error dropping student: " . $e->getMessage());
}
?>
