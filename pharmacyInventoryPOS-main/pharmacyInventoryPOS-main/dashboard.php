<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>
<body>

    <?php include "includes/sidebar.php"; ?>  <!-- Sidebar stays here -->


    <div class="dashboard-container">

        <div class="row g-3 p-4">
            <div class="col-md-4">
                <div class="stat-box p-5 shadow rounded bg-white text-center">
                    <h2>₱ 110,901</h2>
                    <p>Cash Sales Today</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box p-5 shadow rounded bg-white text-center">
                    <h2>11</h2>
                    <p>Total Medicine Sold</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box p-5 shadow rounded bg-white text-center">
                    <h2>11</h2>
                    <p>Added Medicines</p>
                </div>
            </div>

            <div class="col-md-4">
                <div class="stat-box p-5 shadow rounded bg-white text-center">
                    <h2>11</h2>
                    <p>Expired Medicines</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box p-5 shadow rounded bg-white text-center">
                    <h2>11</h2>
                    <p>Medicine Categories</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-box p-5 shadow rounded bg-white text-center">
                    <h2>11</h2>
                    <p>System Users</p>
                </div>
            </div>
        </div>



        <div class="dashboard-center">

        <div class="bg-white shadow rounded p-4 mb-5 w-100">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h4 class="m-0">Sales Today</h4>
                <div>
                    <input type="text" class="form-control d-inline-block" placeholder="Search Product" style="width: 220px;">
                    <button class="btn btn-primary ms-2">Sort</button>
                </div>
            </div>



            <table class="table table-bordered align-middle text-center">
                <thead class="table-light">
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
                        <td>50</td>
                        <td>10</td>
                        <td>500</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>

</body>
</html>
