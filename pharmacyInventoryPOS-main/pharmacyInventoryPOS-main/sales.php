<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sales - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/sales.css">
</head>
<body>
    
    <?php include "includes/sidebar.php"; ?>

    <main class="main-content">
        <!-- Sales Table Container -->
        <div class="sales-table-container">
            <div class="table-header">
                <h4>Sales</h4>
                <div class="d-flex align-items-center">
                    <button class="new-sale-btn" onclick="openNewSaleModal()">
                        <span>+ New Sale</span>
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
                            <th>Sale Date</th>
                            <th>Product Name</th>
                            <th>Quantity Sold</th>
                            <th>Price</th>
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

    <!-- New Sale Form Modal -->
    <div id="newSaleModal" class="modal-overlay">
        <div class="modal-content new-sale-modal">
            <div class="modal-header-custom">
                <h5>New Sale Form</h5>
            </div>
            <div class="modal-body-custom">
                <div class="form-group">
                    <label>Customer</label>
                    <select class="form-select" id="customerSelect">
                        <option>Select Customer</option>
                        <option>GUEST</option>
                        <option>Customer 1</option>
                        <option>Customer 2</option>
                        <option>Customer 3</option>
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
                        <input type="number" class="form-control" id="quantity" value="1">
                    </div>
                    <div class="form-group-btn">
                        <button class="add-to-list-btn" onclick="addToList()">+ Add to List</button>
                    </div>
                </div>

                <!-- Products List Table -->
                <div class="products-list">
                    <table class="list-table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Price per med</th>
                                <th>Amount</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody id="productsList">
                            <tr>
                                <td>
                                    <div class="product-name">Name: Sample</div>
                                    <div class="product-sku">SKU: 123456789012</div>
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
                    <button class="btn-pay" onclick="openPaymentModal()">Pay</button>
                    <button class="btn-cancel" onclick="closeNewSaleModal()">Cancel</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Select Customer Modal -->
    <!-- REMOVED - Using normal select dropdown instead -->

    <!-- Select Product Modal -->
    <!-- REMOVED - Using normal select dropdown instead -->

    <!-- Payment Form Modal -->
    <div id="paymentModal" class="modal-overlay">
        <div class="modal-content payment-modal">
            <div class="modal-header-custom">
                <h5>Payment</h5>
            </div>
            <div class="modal-body-custom">
                <div class="form-group">
                    <label>Total Amount</label>
                    <input type="text" class="form-control" id="paymentTotal" value="11000" readonly>
                </div>
                <div class="form-group">
                    <label>Amount Tendered</label>
                    <input type="number" class="form-control" id="amountTendered" placeholder="15000">
                </div>
                <div class="form-group">
                    <label>Change</label>
                    <input type="text" class="form-control" id="change" value="4000" readonly>
                </div>

                <div class="modal-footer-custom">
                    <button class="btn-pay" onclick="completeSale()">Pay</button>
                    <button class="btn-cancel" onclick="closePaymentModal()">Cancel</button>
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
        function openNewSaleModal() {
            document.getElementById('newSaleModal').style.display = 'flex';
        }

        function closeNewSaleModal() {
            document.getElementById('newSaleModal').style.display = 'none';
        }

        function addToList() {
            // Add product to list logic here
            console.log('Add to list clicked');
        }

        function openPaymentModal() {
            document.getElementById('paymentModal').style.display = 'flex';
        }

        function closePaymentModal() {
            document.getElementById('paymentModal').style.display = 'none';
        }

        function completeSale() {
            alert('Sale completed!');
            closePaymentModal();
            closeNewSaleModal();
        }

        // Calculate change
        document.getElementById('amountTendered')?.addEventListener('input', function() {
            const total = parseFloat(document.getElementById('paymentTotal').value) || 0;
            const tendered = parseFloat(this.value) || 0;
            const change = tendered - total;
            document.getElementById('change').value = change >= 0 ? change : 0;
        });

        // Close modals when clicking outside
        window.onclick = function(event) {
            if (event.target.classList.contains('modal-overlay')) {
                event.target.style.display = 'none';
            }
        }
    </script>
</body>
</html>