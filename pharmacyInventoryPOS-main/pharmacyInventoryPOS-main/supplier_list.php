<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> Supplier List - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/supplier_list.css">
</head>
<body>
    
    <?php include "includes/sidebar.php"; ?>


<main class="main-content">
    <div class="sales-table-container">
        <div class="table-header">
            <h4>Supplier List</h4>
            <div class="d-flex align-items-center">
                <button class="new-medicine-btn">
                    <span>+ New Supplier</span>
                </button>

                <div class="search-box">
                    <input type="text" id="searchSupplier" placeholder="Search Supplier">
                </div>

                <button class="sort-btn">
                    <span>Sort</span>
                </button>
            </div>
        </div>

        <div class="table-responsive">
            <table class="sales-table">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Supplier Name</th>
                        <th>Contact Number</th>
                        <th>Address</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Supplier 1</td>
                        <td>09123456789</td>
                        <td>Sample Address</td>
                        <td>
                            <button class="action-btn edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                            <button class="action-btn delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Supplier 2</td>
                        <td>09123456789</td>
                        <td>Sample Address</td>
                        <td>
                            <button class="action-btn edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                            <button class="action-btn delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Supplier 3</td>
                        <td>09123456789</td>
                        <td>Sample Address</td>
                        <td>
                            <button class="action-btn edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                            <button class="action-btn delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Supplier 4</td>
                        <td>09123456789</td>
                        <td>Sample Address</td>
                        <td>
                            <button class="action-btn edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                            <button class="action-btn delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Supplier 5</td>
                        <td>09123456789</td>
                        <td>Sample Address</td>
                        <td>
                            <button class="action-btn edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                            <button class="action-btn delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>6</td>
                        <td>Supplier 6</td>
                        <td>09123456789</td>
                        <td>Sample Address</td>
                        <td>
                            <button class="action-btn edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                            <button class="action-btn delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- ✅ SEARCH SUPPLIER SCRIPT -->
<script>
document.getElementById('searchSupplier').addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();
    const rows = document.querySelectorAll('.sales-table tbody tr');

    rows.forEach(row => {
        const supplierName = row.cells[1].textContent.toLowerCase();
        const contact = row.cells[2].textContent.toLowerCase();
        const address = row.cells[3].textContent.toLowerCase();

        row.style.display =
            supplierName.includes(searchValue) ||
            contact.includes(searchValue) ||
            address.includes(searchValue)
            ? '' : 'none';
    });
});
</script>

</body>
</html>
