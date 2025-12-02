<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicine Inventory - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/medicine_inventory.css">
</head>
<body>
    
    <?php include "includes/sidebar.php"; ?>

    <main class="main-content overflow-auto">
        <!-- Medicine Inventory Table -->
        <div class="sales-table-container">
            <div class="table-header">
                <h4>Medicine Inventory</h4>
                <div class="d-flex align-items-center">
                    <div class="search-box">
                        <input type="text" id="searchProduct" placeholder="Search Product">
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
                            <th>Product Name</th>
                            <th>Stock In</th>
                            <th>Stock Out</th>
                            <th>Expired</th>
                            <th>Stock Available</th>
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
                            <td>1</td>
                            <td>Paracetamol (Tylenol) 500mg</td>
                            <td>100</td>
                            <td>20</td>
                            <td>0</td>
                            <td>80</td>
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
                            <td>4</td>
                            <td>Cetirizine 5mg</td>
                            <td>350</td>
                            <td>60</td>
                            <td>0</td>
                            <td>490</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>Ciprofloxacin 500mg</td>
                            <td>120</td>
                            <td>0</td>
                            <td>0</td>
                            <td>120</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>Salbutamol (Ventolin) 100mcg</td>
                            <td>120</td>
                            <td>0</td>
                            <td>0</td>
                            <td>120</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>Prednisolone 15mg</td>
                            <td>300</td>
                            <td>0</td>
                            <td>0</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>Ofloxacin 0.3% 5m</td>
                            <td>250</td>
                            <td>0</td>
                            <td>0</td>
                            <td>250</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>Omeprazole 20mg</td>
                            <td>500</td>
                            <td>0</td>
                            <td>0</td>
                            <td>500</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>Metformin 500mg</td>
                            <td>300</td>
                            <td>0</td>
                            <td>0</td>
                            <td>300</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>Loperamide 2mg</td>
                            <td>500</td>
                            <td>0</td>
                            <td>0</td>
                            <td>500</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        // Simple search functionality
        document.getElementById('searchProduct').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('.sales-table tbody tr');
            
            tableRows.forEach(row => {
                const productName = row.cells[1].textContent.toLowerCase();
                if (productName.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });
    </script>
</body>
</html