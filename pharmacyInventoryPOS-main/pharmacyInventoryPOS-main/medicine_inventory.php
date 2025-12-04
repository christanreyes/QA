<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicine Inventory - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/medicine_inventory.css">
</head>
<body>
    
    <?php include "includes/sidebar.php"; ?>

    <main class="main-content overflow-auto">
        <!-- Medicine Inventory Table -->
        <div class="inventory-table-container">
            <div class="table-header">
                <h4>Medicine Inventory</h4>
                <div class="d-flex align-items-center">
                    <div class="search-box">
                        <input type="text" id="medicineSearchInput" placeholder="Search Medicine">
                    </div>
                    <button class="sort-btn">
                        <span>Sort</span>
                    </button>
                </div>
            </div>
            
            <div class="table-responsive">
                <table class="inventory-table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Medicine Name</th>
                            <th>Stock In</th>
                            <th>Stock Out</th>
                            <th>Expired</th>
                            <th>Available Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Paracetamol (Tylenol) 500mg</td>
                            <td>100</td>
                            <td>20</td>
                            <td>0</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Amoxicillin 250mg</td>
                            <td>10</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ibuprofen 200mg</td>
                            <td>200</td>
                            <td>70</td>
                            <td>20</td>
                            <td>130</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Paracetamol (Tylenol) 500mg</td>
                            <td>100</td>
                            <td>20</td>
                            <td>0</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Amoxicillin 250mg</td>
                            <td>10</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ibuprofen 200mg</td>
                            <td>200</td>
                            <td>70</td>
                            <td>20</td>
                            <td>130</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Paracetamol (Tylenol) 500mg</td>
                            <td>100</td>
                            <td>20</td>
                            <td>0</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Amoxicillin 250mg</td>
                            <td>10</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ibuprofen 200mg</td>
                            <td>200</td>
                            <td>70</td>
                            <td>20</td>
                            <td>130</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Paracetamol (Tylenol) 500mg</td>
                            <td>100</td>
                            <td>20</td>
                            <td>0</td>
                            <td>80</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Amoxicillin 250mg</td>
                            <td>10</td>
                            <td>5</td>
                            <td>0</td>
                            <td>5</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Ibuprofen 200mg</td>
                            <td>200</td>
                            <td>70</td>
                            <td>20</td>
                            <td>130</td>
                        </tr>
                        <!-- More rows... -->
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Search functionality for Medicine Inventory
        const medicineSearchInput = document.getElementById('medicineSearchInput');
        const inventoryTableRows = document.querySelectorAll('.inventory-table tbody tr');

        medicineSearchInput.addEventListener('keyup', function() {
            const query = medicineSearchInput.value.toLowerCase();
            
            inventoryTableRows.forEach(row => {
                const medicineName = row.cells[1].textContent.toLowerCase();
                row.style.display = medicineName.includes(query) ? '' : 'none';
            });
        });
    </script>
</body>
</html>
