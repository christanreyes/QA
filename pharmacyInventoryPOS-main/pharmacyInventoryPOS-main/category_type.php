<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicine Category and Type - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/category_type.css">
</head>
<body>
    
    <?php include "includes/sidebar.php"; ?>

    <main class="main-content">
        <!-- Category and Type Container -->
        <div class="category-type-container">
            <!-- Two Tables Side by Side -->
            <div class="tables-wrapper">
                <!-- Category Table -->
                <div class="table-section">
                    <div class="table-header">
                        <h5>Category and Type</h5>
                        <div class="d-flex align-items-center">
                            <button class="new-category-btn" onclick="openCategoryModal()">
                                <span>+ New Category</span>
                            </button>
                            <button class="new-type-btn" onclick="openTypeModal()">
                                <span>+ New Type</span>
                            </button>
                            <div class="search-box">
                                <input type="text" id="searchCategory" placeholder="Search Product">
                            </div>
                            <button class="sort-btn">
                                <span>Sort</span>
                            </button>
                        </div>
                    </div>
                    
                    <div class="split-tables">
                        <!-- Category Table -->
                        <div class="table-half">
                            <div class="table-responsive">
                                <table class="category-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Category</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Analgesics</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Antibiotics</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>NSAID</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Antihistamine</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Antibiotic</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Bronchodilator</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Antidiabetics</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Proton Pump Inhibitor</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Cough Medicines</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Antidiarrheals</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Laxatives</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <!-- Type Table -->
                        <div class="table-half">
                            <div class="table-responsive">
                                <table class="category-table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Type</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Tablet</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Capsules</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Oral Solution</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td>Inhaler</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td>Eye Drops</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td>Ear Drops</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td>Ointment</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td>Cream</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td>Suppository</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td>Injection</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td>Powder</td>
                                            <td>
                                                <button class="action-btn edit-btn" title="Edit">
                                                    <img src="assets/images/edit_icon.png" alt="Edit">
                                                </button>
                                                <button class="action-btn delete-btn" title="Delete">
                                                    <img src="assets/images/delete_icon.png" alt="Delete">
                                                </button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Medicine Category Form Modal -->
    <div id="categoryModal" class="modal-overlay">
        <div class="modal-content category-modal">
            <div class="modal-header-custom">
                <h5>Medicine Category Form</h5>
            </div>
            <div class="modal-body-custom">
                <div class="form-group">
                    <label>Create Medicine Type</label>
                    <input type="text" class="form-control" id="categoryName" placeholder="">
                </div>

                <div class="modal-footer-custom">
                    <button class="btn-save" onclick="saveCategory()">Save</button>
                    <button class="btn-cancel" onclick="closeCategoryModal()">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Medicine Type Form Modal -->
    <div id="typeModal" class="modal-overlay">
        <div class="modal-content type-modal">
            <div class="modal-header-custom">
                <h5>Medicine Type Form</h5>
            </div>
            <div class="modal-body-custom">
                <div class="form-group">
                    <label>Create New Type</label>
                    <input type="text" class="form-control" id="typeName" placeholder="">
                </div>

                <div class="modal-footer-custom">
                    <button class="btn-save" onclick="saveType()">Save</button>
                    <button class="btn-cancel" onclick="closeTypeModal()">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        document.getElementById('searchCategory').addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();

    // Get all rows from both tables
    const allRows = document.querySelectorAll('.category-table tbody tr');

    allRows.forEach(row => {
        const rowText = row.cells[1].textContent.toLowerCase(); // Column 1 = Category or Type
        row.style.display = rowText.includes(searchValue) ? '' : 'none';
    });
});

        // Modal functions
        function openCategoryModal() {
            document.getElementById('categoryModal').style.display = 'flex';
        }

        function closeCategoryModal() {
            document.getElementById('categoryModal').style.display = 'none';
        }

        function openTypeModal() {
            document.getElementById('typeModal').style.display = 'flex';
        }

        function closeTypeModal() {
            document.getElementById('typeModal').style.display = 'none';
        }

        function saveCategory() {
            alert('Category saved successfully!');
            closeCategoryModal();
        }

        function saveType() {
            alert('Type saved successfully!');
            closeTypeModal();
        }

        // Close modal when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay')) {
                event.target.style.display = 'none';
            }
        }
    </script>
</body>
</html>