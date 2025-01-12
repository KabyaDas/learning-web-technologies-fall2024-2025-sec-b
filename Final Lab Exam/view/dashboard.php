<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Employee Dashboard</h2>
    
    <h3>Search User</h3>
    <form action="dashboardHandler.php" method="get">
        <input type="text" name="keyword" placeholder="Search by name or username">
        <button type="submit">Search</button>
    </form>

    <h3>User List</h3>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Contact</th>
            <th>Username</th>
            <th>Actions</th>
        </tr>

        <?php
        require_once '../model/db.php';
        $keyword = isset($_GET['keyword']) ? $_GET['keyword'] : '';
        $users = searchUser($keyword);

        foreach ($users as $user) {
            echo "<tr>";
            echo "<td>{$user['id']}</td>";
            echo "<td>{$user['emp_name']}</td>";
            echo "<td>{$user['contact_no']}</td>";
            echo "<td>{$user['username']}</td>";
            echo "<td>
                    <a href='update.php?id={$user['id']}'>Update</a> |
                    <a href='delete.php?id={$user['id']}' onclick=\"return confirm('Are you sure?');\">Delete</a>
                  </td>";
            echo "</tr>";
        }
        ?>
    </table>

    <h3>Add New User</h3>
    <form action="addUserHandler.php" method="post">
        <label for="name">Full Name:</label>
        <input type="text" id="name" name="name" required><br><br>

        <label for="contact_no">Contact Number:</label>
        <input type="text" id="contact_no" name="contact_no" required><br><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>

        <button type="submit">Add User</button>
    </form>
</body>
</html>