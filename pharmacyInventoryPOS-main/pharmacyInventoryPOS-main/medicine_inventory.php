<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicine Inventory</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <?php include "includes/sidebar.php"; ?>  <!-- Sidebar stays here -->



        <div class="dashboard-center">

            <div class="bg-white shadow rounded p-4 mb-5 w-100">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="m-0">Medicine Inventory</h4>

                    <div>
                        <input type="text" id="searchInput" class="form-control d-inline-block"
                        placeholder="Search Product" style="width: 220px;" oninput="filterTable()">
                        <button class="btn btn-primary ms-2" onclick="sortByAvailable()">Sort</button>
                    </div>
                </div>

                <table class="table table-bordered align-middle text-center" id="inventoryTable">
                    <thead class="table-light">
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
                        <tr><td>1</td><td>Paracetamol (Tylenol) 500mg</td><td>100</td><td>20</td><td>0</td><td>80</td></tr>
                    </tbody>
                </table>
            </div>

        </div>


    <script>
        // Search
        function filterTable() {
            let q = document.getElementById("searchInput").value.toLowerCase();
            let rows = document.querySelectorAll("#inventoryTable tbody tr");

            rows.forEach(row => {
                let name = row.cells[1].textContent.toLowerCase();
                row.style.display = name.includes(q) ? "" : "none";
            });
        }

        // Sort by stock available
        let sortDesc = false;

        function sortByAvailable() {
            const tbody = document.querySelector("#inventoryTable tbody");
            const rows = Array.from(tbody.querySelectorAll("tr"));

            rows.sort((a, b) => {
                let aVal = parseInt(a.cells[5].textContent);
                let bVal = parseInt(b.cells[5].textContent);
                return sortDesc ? aVal - bVal : bVal - aVal;
            });

            rows.forEach(r => tbody.appendChild(r));
            sortDesc = !sortDesc;

            // Update numbering
            Array.from(tbody.querySelectorAll("tr")).forEach((r, i) => {
                r.cells[0].textContent = i + 1;
            });
        }
    </script>

</body>
</html>
