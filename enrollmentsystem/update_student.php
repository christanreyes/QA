<?php
include 'includes/database.php';

$id = $_POST['id'];
$action = $_POST['action'];

if($action == "save"){
    $stmt = $pdo->prepare("UPDATE students SET
        first_name=?, middle_name=?, last_name=?, course=?, year_level=?, section=?
        WHERE id=?");
    $stmt->execute([
        $_POST['first_name'], $_POST['middle_name'], $_POST['last_name'],
        $_POST['course'], $_POST['year_level'], $_POST['section'], $id
    ]);
}
elseif($action == "drop"){
    $stmt = $pdo->prepare("UPDATE students SET student_status='Dropped' WHERE id=?");
    $stmt->execute([$id]);
}

header("Location: all_students.php");
exit;
?>
