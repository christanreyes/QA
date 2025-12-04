<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/dashboard.css">

    </head>
    <body>
        
        <?php include "includes/sidebar.php"; ?>

        <main class="main-content overflow-auto">
            <!-- Stats Cards -->
            <div class="row g-3 mb-4">
                <!-- Cash Sales Today -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="stat-value">₱ 10,901</div>
                                <div class="stat-label">Cash Sales Today</div>
                            </div>
                            <div class="stat-icon blue">
                                <img src="assets/images/cash_icon.png" alt="Cash">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Total Medicine Sold -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="stat-value">11</div>
                                <div class="stat-label">Total Medicine Sold</div>
                            </div>
                            <div class="stat-icon teal">
                                <img src="assets/images/medicine_sold_icon.png" alt="Sold">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Added Medicines -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="stat-value">11</div>
                                <div class="stat-label">Added Medicines</div>
                            </div>
                            <div class="stat-icon green">
                                <img src="assets/images/add_medicine_icon.png" alt="Added">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Expired Medicines -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="stat-value">11</div>
                                <div class="stat-label">Expired Medicines</div>
                            </div>
                            <div class="stat-icon blue">
                                <img src="assets/images/calendar_icon.png" alt="Expired">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Medicine Categories -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="stat-value">11</div>
                                <div class="stat-label">Medicine Categories</div>
                            </div>
                            <div class="stat-icon teal">
                                <img src="assets/images/category_icon.png" alt="Categories">
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- System Users -->
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="stat-card">
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="stat-value">11</div>
                                <div class="stat-label">System Users</div>
                            </div>
                            <div class="stat-icon green">
                                <img src="assets/images/users_count_icon.png" alt="Users">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sales Today Table -->
            <div class="sales-table-container">
                <div class="table-header">
                    <h4>Sales Today</h4>
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
                                <th>Product Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Amoxicillin 250mg</td>
                                <td>25</td>
                                <td>10</td>
                                <td>250</td>
                            </tr>
                            <tr>
                                <td>Cetirizine 5mg</td>
                                <td>15</td>
                                <td>10</td>
                                <td>150</td>
                            </tr>
                            <tr>
                                <td>Ibuprofen 200mg</td>
                                <td>20</td>
                                <td>10</td>
                                <td>200</td>
                            </tr>
                            <tr>
                                <td>Paracetamol (Tylenol) 500mg</td>
                                <td>30</td>
                                <td>10</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>Paracetamol (Tylenol) 500mg</td>
                                <td>30</td>
                                <td>10</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>Paracetamol (Tylenol) 500mg</td>
                                <td>30</td>
                                <td>10</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>Paracetamol (Tylenol) 500mg</td>
                                <td>30</td>
                                <td>10</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>Paracetamol (Tylenol) 500mg</td>
                                <td>30</td>
                                <td>10</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>Paracetamol (Tylenol) 500mg</td>
                                <td>30</td>
                                <td>10</td>
                                <td>300</td>
                            </tr>
                            <tr>
                                <td>Paracetamol (Tylenol) 500mg</td>
                                <td>30</td>
                                <td>10</td>
                                <td>300</td>
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
                    const productName = row.cells[0].textContent.toLowerCase();
                    if (productName.includes(searchValue)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
        </script>
    </body>
</html>