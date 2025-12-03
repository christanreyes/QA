<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Category and Type - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/med-list.css">
</head>
<body>


    <?php include "includes/sidebar.php"; ?>
<main class="main-content">
    <div class="module-container">
        <div class="module-header d-flex justify-content-between align-items-center">
            <h4>Medicine List</h4>
            <div class="header-controls d-flex align-items-center">
                <button class="btn btn-primary me-2" onclick="openNewMedicineModal()">+ New Medicine</button>
                <input type="text" id="searchMedicine" class="form-control me-2" placeholder="Search Product">
                <button class="btn btn-secondary">Sort</button>
            </div>
        </div>

        <div class="table-scroll">
            <table class="medicine-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Product Information</th>
                        <th>Category</th>
                        <th>Type</th>
                        <th>Price per med</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody id="medicineTableBody">
                    <tr>
                        <td>1</td>
                        <td>
                            SKU: <strong>672493018245</strong><br>
                            Name: <strong>Paracetamol (Tylenol) 500mg</strong>
                        </td>
                        <td>Analgesic</td>
                        <td>Tablet</td>
                        <td>10</td>
                        <td>
                            <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png" alt="Edit"></button>
                            <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png" alt="Delete"></button>
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>
                            SKU: <strong>183945607231</strong><br>
                            Name: <strong>Amoxicillin 250mg</strong>
                        </td>
                        <td>Antibiotic</td>
                        <td>Capsule</td>
                        <td>10</td>
                        <td>
                            <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png" alt="Edit"></button>
                            <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png" alt="Delete"></button>
                        </td>
                    </tr>
                    <!-- Add more rows as needed -->
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- New Medicine Modal -->
<div id="newMedicineModal" class="modal-overlay">
    <div class="modal-content">
        <div class="modal-header">
            <h5>New Medicine</h5>
        </div>
        <div class="modal-body">
            <div class="mb-3">
                <label for="medicineSKU" class="form-label">SKU</label>
                <input type="text" class="form-control" id="medicineSKU">
            </div>
            <div class="mb-3">
                <label for="medicineName" class="form-label">Name</label>
                <input type="text" class="form-control" id="medicineName">
            </div>
            <div class="mb-3">
                <label for="medicineCategory" class="form-label">Category</label>
                <input type="text" class="form-control" id="medicineCategory">
            </div>
            <div class="mb-3">
                <label for="medicineType" class="form-label">Type</label>
                <input type="text" class="form-control" id="medicineType">
            </div>
            <div class="mb-3">
                <label for="medicinePrice" class="form-label">Price per med</label>
                <input type="number" class="form-control" id="medicinePrice">
            </div>
        </div>
        <div class="modal-footer">
            <button class="btn btn-success" onclick="addMedicine()">Save</button>
            <button class="btn btn-secondary" onclick="closeNewMedicineModal()">Cancel</button>
        </div>
    </div>
</div>

<script>
    function openNewMedicineModal() {
        document.getElementById('newMedicineModal').style.display = 'flex';
    }

    function closeNewMedicineModal() {
        document.getElementById('newMedicineModal').style.display = 'none';
    }

    function addMedicine() {
        alert('Medicine added successfully!');
        closeNewMedicineModal();
    }

    // Simple search functionality
    document.getElementById('searchMedicine').addEventListener('keyup', function() {
        const searchValue = this.value.toLowerCase();
        const rows = document.querySelectorAll('#medicineTableBody tr');

        rows.forEach(row => {
            const productInfo = row.cells[1].textContent.toLowerCase();
            row.style.display = productInfo.includes(searchValue) ? '' : 'none';
        });
    });
</script>

</body>
</html>
