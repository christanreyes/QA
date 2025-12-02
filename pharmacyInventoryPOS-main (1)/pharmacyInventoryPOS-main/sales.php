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

    <?php include "includes/sidebar.php"; ?>
    
  <main class="main-content ">
<div class="container-fluid px-4 sales-container">
    <div class="card shadow-sm border-0">
        <div class="card-body">

            <h3 class="sales-title">Sales</h3>

            <div class="sales-action-bar">
                <a href="add_sales.php" class="btn btn-primary btn-sales-new">
                    + New Sale
                </a>

                <div class="d-flex gap-2">
                    <form action="" method="GET" class="sales-search">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control" placeholder="Search Product">
                            <button class="btn btn-outline-secondary"><i class="bi bi-search"></i></button>
                        </div>
                    </form>

                    <button class="btn btn-outline-secondary btn-sales-sort">
                        <i class="bi bi-funnel"></i> Sort
                    </button>
                </div>
            </div>

            <div class="sales-table table-responsive">
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Sale Date</th>
                            <th>Product Name</th>
                            <th>Quantity Sold</th>
                            <th>Price</th>
                            <th>Customer Name</th>
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
        <td>GUEST</td>
        <td>
            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
        </td>
    </tr>
    <tr>
        <td>2</td>
        <td>January 1, 2025</td>
        <td>123456789</td>
        <td>10</td>
        <td>100</td>
        <td>GUEST</td>
        <td>
            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
        </td>
    </tr>
    <tr>
        <td>3</td>
        <td>January 1, 2025</td>
        <td>123456789</td>
        <td>10</td>
        <td>100</td>
        <td>GUEST</td>
        <td>
            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
        </td>
    </tr>
    <tr>
        <td>4</td>
        <td>January 1, 2025</td>
        <td>123456789</td>
        <td>10</td>
        <td>100</td>
        <td>GUEST</td>
        <td>
            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
        </td>
    </tr>
    <tr>
        <td>5</td>
        <td>January 1, 2025</td>
        <td>123456789</td>
        <td>10</td>
        <td>100</td>
        <td>GUEST</td>
        <td>
            <a href="#" class="btn btn-sm btn-outline-primary"><i class="bi bi-pencil-square"></i></a>
            <a href="#" class="btn btn-sm btn-outline-danger"><i class="bi bi-trash"></i></a>
        </td>
    </tr>
</tbody>

                </table>
            </div>

        </div>
    </div>
</div>
