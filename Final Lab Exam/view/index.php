<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management</title>
    <link rel="stylesheet" href="styles.css">
    <script src="scripts.js" defer></script>
</head>
<body>
    <h1>Employee Management</h1>

    <section>
        <h2>Add Employee</h2>
        <form id="addEmployeeForm" action="add_employee.php" method="POST">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="contact" placeholder="Contact Number" required>
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Add Employee</button>
        </form>
    </section>

    <section>
        <h2>Update Employee</h2>
        <form id="updateEmployeeForm" action="update_employee.php" method="POST">
            <input type="text" name="id" placeholder="Employee ID" required>
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="contact" placeholder="Contact Number" required>
            <button type="submit">Update Employee</button>
        </form>
    </section>

    <section>
        <h2>Delete Employee</h2>
        <form id="deleteEmployeeForm" action="delete_employee.php" method="POST">
            <input type="text" name="id" placeholder="Employee ID" required>
            <button type="submit">Delete Employee</button>
        </form>
    </section>

    <section>
        <h2>Search Employee</h2>
        <input type="text" id="searchField" placeholder="Search by name or contact">
        <div id="searchResults"></div>
    </section>
</body>
</html>
