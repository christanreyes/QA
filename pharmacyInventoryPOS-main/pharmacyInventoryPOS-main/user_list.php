<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> User List - PharmAC</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/sidebar.css">
    <link rel="stylesheet" href="assets/css/user_list.css">
</head>
<body>
    
    <?php include "includes/sidebar.php"; ?>

    
<main class="main-content">
    <div class="users-table-container">
        <div class="users-table-header">

            <h4>Users</h4>

            <div class="d-flex align-items-center">
              <button class="new-user-btn">
                    <span>+ New User</span>
                </button>

              <div class="users-search-box">

                    <input type="text" id="searchUser" placeholder="Search User">
                </div>

                <button class="users-sort-btn">
                    <span>Sort</span>
                </button>
            </div>
        </div>

      <div class="users-table-responsive">

           <table class="users-table">

                <thead>
                    <tr>
                        <th>#</th>
                        <th>Account Name</th>
                        <th>Role</th>
                        <th>Username</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Bosinon</td>
                        <td>Admin</td>
                        <td>admin123</td>
                        <td>
                            <button class="users-action-btn users-edit-btn">

                                <img src="assets/images/edit_icon.png">
                            </button>
                          <button class="users-action-btn users-delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>Bosinon</td>
                        <td>Admin</td>
                        <td>admin123</td>
                        <td>
                            <button class="users-action-btn users-edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                          <button class="users-action-btn users-delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>Bosinon</td>
                        <td>Admin</td>
                        <td>admin123</td>
                        <td>
                            <button class="users-action-btn users-edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                          <button class="users-action-btn users-delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>4</td>
                        <td>Bosinon</td>
                        <td>Admin</td>
                        <td>admin123</td>
                        <td>
                            <button class="users-action-btn users-edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                          <button class="users-action-btn users-delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>5</td>
                        <td>Bosinon</td>
                        <td>Admin</td>
                        <td>admin123</td>
                        <td>
                            <button class="users-action-btn users-edit-btn">
                                <img src="assets/images/edit_icon.png">
                            </button>
                          <button class="users-action-btn users-delete-btn">
                                <img src="assets/images/delete_icon.png">
                            </button>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- ✅ USER SEARCH SCRIPT -->
<script>
document.getElementById('searchUser').addEventListener('keyup', function() {
    const searchValue = this.value.toLowerCase();
    const rows = document.querySelectorAll('.sales-table tbody tr');

    rows.forEach(row => {
        const accName = row.cells[1].textContent.toLowerCase();
        const role = row.cells[2].textContent.toLowerCase();
        const username = row.cells[3].textContent.toLowerCase();

        row.style.display =
            accName.includes(searchValue) ||
            role.includes(searchValue) ||
            username.includes(searchValue)
            ? '' : 'none';
    });
});
</script>

</body>
</html>