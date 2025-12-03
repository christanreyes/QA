<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Category and Type - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/category-type.css">
</head>
<body>


<?php include "includes/sidebar.php"; ?>

<main class="main-content">

    <!-- MODULE CONTAINER -->
    <div class="sales-table-container">

        <!-- HEADER -->
        <div class="table-header">
            <h4>Category and Type</h4>

            <div class="d-flex align-items-center">
                <button class="new-cat-btn" onclick="openCategoryModal()">+ New Category</button>
                <button class="new-type-btn ms-2" onclick="openTypeModal()">+ New Type</button>

                <div class="search-box ms-2">
                    <input type="text" id="searchItem" placeholder="Search">
                </div>

                <button class="sort-btn ms-2">Sort</button>
            </div>
        </div>

        <!-- TABLES -->
        <div class="row mt-3">

            <!-- CATEGORY TABLE -->
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="sales-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                                <tbody id="categoryTable">
                <tr><td>1</td><td>Analgesics</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>2</td><td>Antibiotics</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>3</td><td>NSAID</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>4</td><td>Antihistamine</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>5</td><td>Antibiotic</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>6</td><td>Bronchodilator</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>7</td><td>Antidiabetics</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>8</td><td>Proton Pump Inhibitor</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>9</td><td>Cough Medicines</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>10</td><td>Antidiarrheals</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>11</td><td>Laxatives</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>
            </tbody>


                    </table>
                </div>
            </div>

            <!-- TYPE TABLE -->
            <div class="col-md-6">
                <div class="table-responsive">
                    <table class="sales-table">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Type</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                       <tbody id="typeTable">
                <tr><td>1</td><td>Tablet</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>2</td><td>Capsules</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>3</td><td>Oral Solution</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>4</td><td>Inhaler</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>5</td><td>Eye Drops</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>6</td><td>Ear Drops</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>7</td><td>Ointment</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>8</td><td>Cream</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>9</td><td>Suppository</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>10</td><td>Injection</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>

                <tr><td>11</td><td>Powder</td><td>
                    <button class="action-btn edit-btn"><img src="assets/images/edit_icon.png"></button>
                    <button class="action-btn delete-btn"><img src="assets/images/delete_icon.png"></button>
                </td></tr>
            </tbody>


                    </table>
                </div>
            </div>

        </div>

    </div>

</main>

<!-- CATEGORY MODAL -->
<div id="categoryModal" class="modal-overlay">
    <div class="modal-content new-stock-modal">
        <div class="modal-header-custom">
            <h5>New Category</h5>
        </div>

        <div class="modal-body-custom">
            <div class="form-group">
                <label>Category Name</label>
                <input type="text" class="form-control" id="categoryName">
            </div>

            <div class="modal-footer-custom">
                <button class="btn-submit">Save</button>
                <button class="btn-cancel" onclick="closeCategoryModal()">Cancel</button>
            </div>
        </div>
    </div>
</div>

<!-- TYPE MODAL -->
<div id="typeModal" class="modal-overlay">
    <div class="modal-content new-stock-modal">
        <div class="modal-header-custom">
            <h5>New Type</h5>
        </div>

        <div class="modal-body-custom">
            <div class="form-group">
                <label>Type Name</label>
                <input type="text" class="form-control" id="typeName">
            </div>

            <div class="modal-footer-custom">
                <button class="btn-submit">Save</button>
                <button class="btn-cancel" onclick="closeTypeModal()">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script>
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
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
