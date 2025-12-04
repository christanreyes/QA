<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Medicine List - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/medicine_list.css">
</head>
<body>
    
    <?php include "includes/sidebar.php"; ?>

    <main class="main-content">
        <!-- Medicine List Table Container -->
        <div class="sales-table-container">
            <div class="table-header">
                <h4>Medicine List</h4>
                <div class="d-flex align-items-center">
                    <button class="new-medicine-btn" onclick="openMedicineModal()">
                        <span>+ New Medicine</span>
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
                            <th>Product Information</th>
                            <th>Category</th>
                            <th>Type</th>
                            <th>Price per med</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>
                                <div class="product-sku">SKU: 672493019245</div>
                                <div class="product-name">Name: Paracetamol (Tylenol) 500mg</div>
                            </td>
                            <td>Analgesic</td>
                            <td>Tablet</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 183945607231</div>
                                <div class="product-name">Name: Amoxicillin 250mg</div>
                            </td>
                            <td>Antibiotic</td>
                            <td>Capsule</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 839271056438</div>
                                <div class="product-name">Name: Ibuprofen 200mg</div>
                            </td>
                            <td>NSAID</td>
                            <td>Tablet</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 504331897436</div>
                                <div class="product-name">Name: Cetirizine 5mg/5mL</div>
                            </td>
                            <td>Antihistamine</td>
                            <td>Syrup</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 728394065172</div>
                                <div class="product-name">Name: Azithromycin 500mg</div>
                            </td>
                            <td>Antibiotic</td>
                            <td>Tablet</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 865940731556</div>
                                <div class="product-name">Name: Salbutamol (Albuterol) 100mcg</div>
                            </td>
                            <td>Bronchodilator</td>
                            <td>Inhaler</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 278361549027</div>
                                <div class="product-name">Name: Pantoprazole 40mg/5mL</div>
                            </td>
                            <td>Corticosteroid</td>
                            <td>Oral Solution</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 415802693779</div>
                                <div class="product-name">Name: Moxifloxacin 0.3% (3mL)</div>
                            </td>
                            <td>Antibiotic</td>
                            <td>Eye Drops</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 924318765043</div>
                                <div class="product-name">Name: Omeprazole 20mg</div>
                            </td>
                            <td>Proton Pump Inhibitor</td>
                            <td>Capsule</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 149683207544</div>
                                <div class="product-name">Name: Metformin 500mg</div>
                            </td>
                            <td>Antidiabetic</td>
                            <td>Injection</td>
                            <td>10</td>
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
                            <td>
                                <div class="product-sku">SKU: 307316842099</div>
                                <div class="product-name">Name: Loperamide 2mg</div>
                            </td>
                            <td>Antidiarrheal</td>
                            <td>Capsule</td>
                            <td>10</td>
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

    <!-- Medicine List Form Modal -->
    <div id="medicineModal" class="modal-overlay">
        <div class="modal-content medicine-modal">
            <div class="modal-header-custom">
                <h5>Medicine List Form</h5>
            </div>
            <div class="modal-body-custom">
                <div class="form-row-two">
                    <div class="form-group">
                        <label>SKU</label>
                        <input type="text" class="form-control" id="sku" placeholder="e.g 7821783874923">
                    </div>
                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" class="form-control" id="productName" placeholder="">
                    </div>
                </div>

                <div class="form-row-two">
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-select" id="category">
                            <option>Select Category</option>
                            <option>Analgesic</option>
                            <option>Antibiotic</option>
                            <option>NSAID</option>
                            <option>Antihistamine</option>
                            <option>Bronchodilator</option>
                            <option>Corticosteroid</option>
                            <option>Proton Pump Inhibitor</option>
                            <option>Antidiabetic</option>
                            <option>Antidiarrheal</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Type</label>
                        <select class="form-select" id="type">
                            <option>Select Type</option>
                            <option>Tablet</option>
                            <option>Capsule</option>
                            <option>Syrup</option>
                            <option>Inhaler</option>
                            <option>Oral Solution</option>
                            <option>Eye Drops</option>
                            <option>Injection</option>
                        </select>
                    </div>
                </div>

                <div class="form-row-two">
                    <div class="form-group">
                        <label>Measurement</label>
                        <input type="text" class="form-control" id="measurement" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Price</label>
                        <input type="number" class="form-control" id="price" placeholder="">
                    </div>
                </div>

                <div class="modal-footer-custom">
                    <button class="btn-save" onclick="saveMedicine()">Save</button>
                    <button class="btn-cancel" onclick="closeMedicineModal()">Cancel</button>
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
                const productInfo = row.cells[1].textContent.toLowerCase();
                if (productInfo.includes(searchValue)) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

        // Modal functions
        function openMedicineModal() {
            document.getElementById('medicineModal').style.display = 'flex';
        }

        function closeMedicineModal() {
            document.getElementById('medicineModal').style.display = 'none';
        }

        function saveMedicine() {
            alert('Medicine saved successfully!');
            closeMedicineModal();
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