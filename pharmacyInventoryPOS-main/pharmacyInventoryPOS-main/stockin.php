<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Stock In - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/stockin.css">
</head>
<body>
    
    <?php include "includes/sidebar.php"; ?>

    <main class="main-content">
        <!-- Stock In Table Container -->
        <div class="sales-table-container">
            <div class="table-header">
                <h4>Stocking In</h4>
                <div class="d-flex align-items-center">
                    <button class="new-stock-btn" onclick="openNewStockModal()">
                        <span>+ New Stock</span>
                    </button>
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
                            <th>Stock In Date</th>
                            <th>Product Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Supplier Name</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
                            <td>January 1, 2025</td>
                            <td>123456789</td>
                            <td>10</td>
                            <td>100</td>
                            <td>Supplier 1</td>
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
    </main>

    <!-- New Stock Modal -->
    <div id="newStockModal" class="modal-overlay">
        <div class="modal-content new-stock-modal">
            <div class="modal-header-custom">
                <h5>Stocking In Form</h5>
            </div>
            <div class="modal-body-custom">
                <div class="form-group">
                    <label>Supplier</label>
                    <select class="form-select" id="supplierSelect">
                        <option>Select Supplier</option>
                        <option>GUEST</option>
                        <option>Supplier 1</option>
                        <option>Supplier 1</option>
                        <option>Supplier 1</option>
                    </select>
                </div>

                <div class="form-row">
                    <div class="form-group">
                        <label>Product</label>
                        <select class="form-select" id="productSelect">
                            <option>Select Product</option>
                            <option>Paracetamol (Tylenol) 500mg</option>
                            <option>Amoxicillin 250mg</option>
                            <option>Ibuprofen 200mg</option>
                            <option>Cetirizine 5mg</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Quantity</label>
                        <input type="number" class="form-control" id="quantity" value="">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" id="price" value="">
                    </div>
                    <div class="form-group-btn">
                        <button class="add-to-list-btn" onclick="addToStockList()">+ Add to List</button>
                    </div>
                </div>

                <!-- Stock List Table -->
                <div class="products-list">
                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>Expiry Date</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price per Med</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="stockList">
                            <tr>
                                <td>
                                    <input type="date" class="form-control-small" value="2025-10-23">
                                </td>
                                <td>
                                    <div class="product-name">Name: Sample</div>
                                    <div class="product-sku">SKU: 123456789012123</div>
                                </td>
                                <td>1100</td>
                                <td>10</td>
                                <td>11000</td>
                                <td>
                                    <button class="action-btn delete-btn" title="Delete">
                                        <img src="assets/images/delete_icon.png" alt="Delete">
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="total-row">
                        <span>Total:</span>
                        <span id="totalAmount">11000</span>
                    </div>
                </div>

                <div class="modal-footer-custom">
                    <button class="btn-submit" onclick="submitStock()">Save</button>
                    <button class="btn-cancel" onclick="closeNewStockModal()">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <script>
        // Simple search functionality
        document.getElementById('searchProduct').addEventListener('keyup', function() {
            const searchValue = this.value.toLowerCase();
            const tableRows = document.querySelectorAll('.sales-table tbody tr');
            
            tableRows.forEach(row => {
                const productName = row.cells[2].textContent.toLowerCase();
                if (productName.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Modal functions
        function openNewStockModal() {
            document.getElementById('newStockModal').style.display = 'flex';
        }

        function closeNewStockModal() {
            document.getElementById('newStockModal').style.display = 'none';
        }

        function submitStock() {
            alert('Stock added successfully!');
            closeNewStockModal();
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