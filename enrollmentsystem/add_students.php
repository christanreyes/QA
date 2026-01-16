<?php
// --- PROCESS FORM ---
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    include 'includes/database.php'; // your PDO connection

    // Collect basic info
    $student_id = $_POST['student_id'];
    $last_name = $_POST['last_name'];
    $first_name = $_POST['first_name'];
    $middle_name = $_POST['middle_name'];
    $abbreviations = $_POST['abbr'];
    $gender = $_POST['gender'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['address'];
    $status = isset($_POST['status']) ? implode(", ", $_POST['status']) : '';
    $course = $_POST['course'];
    $year_level = isset($_POST['year']) ? $_POST['year'] : '';
    $section = isset($_POST['section']) ? implode(", ", $_POST['section']) : '';

    // OTHER FEES
    $entrance_fee = isset($_POST['other_fee']['entrance']) ? $_POST['other_fee']['entrance'] : 0;
    $id_fee = isset($_POST['other_fee']['id']) ? $_POST['other_fee']['id'] : 0;
    $library_fee = isset($_POST['other_fee']['library']) ? $_POST['other_fee']['library'] : 0;
    $dept_shirt_fee = isset($_POST['other_fee']['shirt']) ? $_POST['other_fee']['shirt'] : 0;

    // SCHOLARSHIPS
    $dean_lister = isset($_POST['scholarship']['dean']) ? $_POST['scholarship']['dean'] : 0;
    $student_assistant = isset($_POST['scholarship']['assistant']) ? $_POST['scholarship']['assistant'] : 0;
    $president_lister = isset($_POST['scholarship']['president']) ? $_POST['scholarship']['president'] : 0;
    $full_scholarship = isset($_POST['scholarship']['full']) ? $_POST['scholarship']['full'] : 0;

    // YEAR FEE
    $year_fee = 0;
    if($year_level == 'First Year') $year_fee = 1500;
    if($year_level == 'Second Year') $year_fee = 1800;
    if($year_level == 'Third Year') $year_fee = 2100;
    if($year_level == 'Fourth Year') $year_fee = 2500;

    // TOTAL FEE
    $total_fee = $year_fee + $entrance_fee + $id_fee + $library_fee + $dept_shirt_fee
                 - ($dean_lister + $student_assistant + $president_lister + $full_scholarship);
    if($total_fee < 0) $total_fee = 0;

    // INSERT INTO DATABASE
    $stmt = $pdo->prepare("INSERT INTO students
        (student_id, last_name, first_name, middle_name, abbreviations, gender, birthday, email, contact, address, STATUS, course, year_level, section,
        entrance_fee, id_fee, library_fee, dept_shirt_fee,
        dean_lister, student_assistant, president_lister, full_scholarship,
        total_fee)
        VALUES
        (:student_id, :last_name, :first_name, :middle_name, :abbreviations, :gender, :birthday, :email, :contact, :address, :status, :course, :year_level, :section,
        :entrance_fee, :id_fee, :library_fee, :dept_shirt_fee,
        :dean_lister, :student_assistant, :president_lister, :full_scholarship,
        :total_fee)
    ");

    $stmt->execute([
        'student_id'=>$student_id,
        'last_name'=>$last_name,
        'first_name'=>$first_name,
        'middle_name'=>$middle_name,
        'abbreviations'=>$abbreviations,
        'gender'=>$gender,
        'birthday'=>$birthday,
        'email'=>$email,
        'contact'=>$contact,
        'address'=>$address,
        'status'=>$status,
        'course'=>$course,
        'year_level'=>$year_level,
        'section'=>$section,
        'entrance_fee'=>$entrance_fee,
        'id_fee'=>$id_fee,
        'library_fee'=>$library_fee,
        'dept_shirt_fee'=>$dept_shirt_fee,
        'dean_lister'=>$dean_lister,
        'student_assistant'=>$student_assistant,
        'president_lister'=>$president_lister,
        'full_scholarship'=>$full_scholarship,
        'total_fee'=>$total_fee
    ]);

    echo "<script>alert('Student saved successfully!'); window.location='add_students.php';</script>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Student</title>
<link rel="stylesheet" href="assets/css/add_student.css">
</head>
<body>

<?php include 'sidebar.php'; ?>

<div class="main">

    <!-- HEADER -->
    <div class="header">
        <div class="title">Student Information</div>
        <div class="header-right"><div id="datetime"></div></div>
    </div>

    <!-- FORM -->
    <form method="POST">
        <div class="form-box">

            <!-- TOTAL FEE BOX -->
            <div class="total-container">
                <label>Total Fee</label>
                <input type="text" id="total_fee" name="total_fee" value="0.00" readonly>
            </div>

            <!-- ROW 1 -->
            <div class="row">
                <div class="field"><label>Last Name</label><input type="text" name="last_name"></div>
                <div class="field"><label>First Name</label><input type="text" name="first_name"></div>
                <div class="field"><label>Middle Name</label><input type="text" name="middle_name"></div>
                <div class="field"><label>Abbreviations</label><input type="text" name="abbr"></div>
            </div>

            <!-- ROW 2 -->
            <div class="row">
                <div class="field"><label>Gender</label><select name="gender">
                        <option>Male</option>
                        <option>Female</option>
                        <option>Yombits</option>
                    </select>
                </div>
                <div class="field"><label>Birthday</label><input type="date" name="birthday"></div>
                <div class="field"><label>Email Add</label><input type="email" name="email"></div>
                <div class="field"><label>Contact Number</label><input type="text" name="contact"></div>
            </div>

            <!-- ADDRESS -->
            <div class="row"><div class="field full"><label>Address</label><input type="text" name="address"></div></div>

            <!-- STATUS -->
            <div class="row">
                <div class="field full">
                    <label>Status</label>
                    <div class="check-row">
                        <label><input type="checkbox" name="status[]" value="Single"> Single</label>
                        <label><input type="checkbox" name="status[]" value="Married"> Married</label>
                        <label><input type="checkbox" name="status[]" value="Widowed"> Widowed</label>
                        <label><input type="checkbox" name="status[]" value="Divorced"> Divorced</label>
                    </div>
                </div>
            </div>

       
            <!-- STUDENT ID -->
            <div class="row">
                <div class="field small">
                    <label>Student ID</label>
                    <input type="text" name="student_id" id="student_id" readonly>
                </div>
            </div>



            <!-- COURSE -->
            <div class="row">
                <div class="field full">
                    <label>Course</label>
                    <select name="course">
                        <option>BSIT</option>
                        <option>BSCS</option>
                        <option>BSCE</option>
                    </select>
                </div>
            </div>

            <!-- BOTTOM GRID -->
            <div class="bottom-grid">

                <!-- YEAR -->
                <div class="box">
                    <h4>Year</h4>
                    <label><input type="checkbox" name="year" value="First Year" class="year"> First Year: 1500.00</label>
                    <label><input type="checkbox" name="year" value="Second Year" class="year"> Second Year: 1800.00</label>
                    <label><input type="checkbox" name="year" value="Third Year" class="year"> Third Year: 2100.00</label>
                    <label><input type="checkbox" name="year" value="Fourth Year" class="year"> Fourth Year: 2500.00</label>
                </div>

                <!-- SECTION -->
                <div class="box">
                    <h4>Section</h4>
                    <label><input type="checkbox" name="section[]" value="A"> A</label>
                    <label><input type="checkbox" name="section[]" value="B"> B</label>
                    <label><input type="checkbox" name="section[]" value="C"> C</label>
                    <label><input type="checkbox" name="section[]" value="D"> D</label>
                </div>

                <!-- OTHER FEES -->
                <div class="box">
                    <h4>Other Fees</h4>
                    <label><input type="checkbox" name="other_fee[entrance]" value="1000" class="other-fee"> Entrance Fee: 1000.00</label>
                    <label><input type="checkbox" name="other_fee[id]" value="120" class="other-fee"> ID Fee: 120.00</label>
                    <label><input type="checkbox" name="other_fee[library]" value="150" class="other-fee"> Library Fee: 150.00</label>
                    <label><input type="checkbox" name="other_fee[shirt]" value="350" class="other-fee"> Dept Shirt Fee: 350.00</label>
                </div>

                <!-- SCHOLARSHIPS -->
                <div class="box">
                    <h4>Scholarship</h4>
                    <label><input type="checkbox" name="scholarship[dean]" value="500" class="scholarship"> Dean Lister: 500.00</label>
                    <label><input type="checkbox" name="scholarship[assistant]" value="700" class="scholarship"> Student Assistant: 700.00</label>
                    <label><input type="checkbox" name="scholarship[president]" value="1000" class="scholarship"> President Lister: 1000.00</label>
                    <label><input type="checkbox" name="scholarship[full]" value="5000" class="scholarship"> Full Scholarship: 5000.00</label>
                </div>

            </div>

            <button type="submit" class="save-btn">Save Student</button>
        </div>
    </form>

</div>

<!-- DATE & TIME -->
<script>
function updateDateTime(){
    document.getElementById("datetime").innerHTML = new Date().toLocaleString();
}
setInterval(updateDateTime,1000);
updateDateTime();
</script>

<!-- TOTAL FEE CALCULATION -->
<script>
const totalField = document.getElementById("total_fee");

function calculateTotal() {
    let total = 0;

    // YEAR
    document.querySelectorAll(".year").forEach(box => {
        if(box.checked){
            if(box.value == "First Year") total += 1500;
            if(box.value == "Second Year") total += 1800;
            if(box.value == "Third Year") total += 2100;
            if(box.value == "Fourth Year") total += 2500;
        }
    });

    // OTHER FEES
    document.querySelectorAll(".other-fee").forEach(box => {
        if(box.checked) total += parseFloat(box.value);
    });

    // SCHOLARSHIPS (deduct)
    document.querySelectorAll(".scholarship").forEach(box => {
        if(box.checked) total -= parseFloat(box.value);
    });

    if(total < 0) total = 0;
    totalField.value = total.toFixed(2);
}

// Attach listener
document.querySelectorAll("input[type=checkbox]").forEach(box => {
    box.addEventListener("change", calculateTotal);
});
</script>

<script>
// Generate random 6-digit numeric Student ID
function generateStudentID() {
    return Math.floor(100000 + Math.random() * 900000); // ensures 6 digits
}

// Set ID on page load
document.getElementById('student_id').value = generateStudentID();
</script>


</body>
</html>
