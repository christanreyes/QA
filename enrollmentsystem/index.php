<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard</title>
<link rel="stylesheet" href="assets/css/dashboard.css">

<body>
<?php 
include 'includes/database.php';
include 'sidebar.php'; 

// Fetch statistics
try {
    $totalStudents = $pdo->query("SELECT COUNT(*) FROM students")->fetchColumn();
} catch (Exception $e) {
    $totalStudents = 0;
}
try {
    $droppedCount = $pdo->query("SELECT COUNT(*) FROM dropped_students")->fetchColumn();
} catch (Exception $e) {
    $droppedCount = 0;
}
// Graduated: prefer a dedicated table, else check status in students
$graduatedCount = 0;
try {
    $hasGradTable = $pdo->query("SHOW TABLES LIKE 'graduate_students'")->fetch();
    if ($hasGradTable) {
        $graduatedCount = $pdo->query("SELECT COUNT(*) FROM graduate_students")->fetchColumn();
    } else {
        $graduatedCount = $pdo->prepare("SELECT COUNT(*) FROM students WHERE LOWER(COALESCE(status,'')) LIKE ?");
        $graduatedCount->execute(['%graduate%']);
        $graduatedCount = $graduatedCount->fetchColumn();
    }
} catch (Exception $e) {
    $graduatedCount = 0;
}
// Dashboard search results (trim input; empty or whitespace = no search)
$searchQuery = isset($_GET['search']) ? trim($_GET['search']) : '';
$searchResults = [];
if ($searchQuery !== '') {
    try {
        // Try exact match on student_id first
        $stmt = $pdo->prepare("SELECT * FROM students WHERE student_id = :id ORDER BY id DESC");
        $stmt->execute(['id' => $searchQuery]);
        $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // If no exact ID matches, fall back to name partial search
        if (count($searchResults) === 0) {
            $stmt = $pdo->prepare("SELECT * FROM students WHERE last_name LIKE :s OR first_name LIKE :s ORDER BY id DESC");
            $stmt->execute(['s' => "%$searchQuery%"]);
            $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    } catch (Exception $e) {
        $searchResults = [];
    }
} else {
    // No search - show all students by default
    try {
        $stmt = $pdo->query("SELECT * FROM students ORDER BY id DESC");
        $searchResults = $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (Exception $e) {
        $searchResults = [];
    }
}
?>


<div class="main">
    <div class="header dashboard-header">
        <div class="title">Enrollment System</div>
        <div class="header-right"><div id="datetime"></div></div>
    </div>

    <div class="dashboard-wrap">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="stat-title">All Student</div>
                <div class="stat-value"><?= number_format($totalStudents); ?></div>
            </div>
            <div class="stat-card">
                <div class="stat-title">Drop Student</div>
                <div class="stat-value"><?= number_format($droppedCount); ?></div>
            </div>
        </div>

        <div class="big-box">
            <div class="big-box-top">
                    <form method="GET" class="search-form">
                        <div class="spacer"></div>
                        <input type="text" name="search" class="search-input" placeholder="Search by Student ID" value="<?= htmlspecialchars($searchQuery) ?>">
                        <button type="submit" class="search-btn">Search Student</button>
                    </form>
                </div>
                <div class="big-box-lines">
                    <?php if (count($searchResults) > 0): ?>
                        <table class="search-results">
                            <thead>
                                <tr>
                                    <th>Student ID</th>
                                    <th>Full Name</th>
                                    <th>Course</th>
                                    <th>Year</th>
                                    <th>Section</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($searchResults as $s): ?>
                                    <tr>
                                        <td><?= htmlspecialchars($s['student_id']); ?></td>
                                        <td><?= htmlspecialchars($s['last_name']) ?>, <?= htmlspecialchars($s['first_name']) ?> <?= htmlspecialchars($s['middle_name']); ?></td>
                                        <td><?= htmlspecialchars($s['course']); ?></td>
                                        <td><?= htmlspecialchars($s['year_level']); ?></td>
                                        <td><?= htmlspecialchars($s['section']); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    <?php else: ?>
                        <div class="no-results">No students found</div>
                    <?php endif; ?>
                </div>
        </div>
    </div>
</div>

<script>
// REAL-TIME DATE & TIME
function updateDateTime() {
    const now = new Date();
    document.getElementById('datetime').textContent = now.toLocaleString();
}
setInterval(updateDateTime, 1000);
updateDateTime();

        // Auto-focus the dashboard search input if present
        window.addEventListener('load', function(){
            var input = document.querySelector('.search-input');
            if (input) input.focus();
            // If a search was performed, remove the query string from the URL so refreshing shows all students
            try {
                if (input && input.value.trim() !== '') {
                    var path = window.location.pathname;
                    window.history.replaceState(null, '', path);
                }
            } catch (e) {
                // ignore
            }
        });
</script>

</body>
</html>
