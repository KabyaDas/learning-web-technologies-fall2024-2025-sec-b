<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>
    <h2>Dashboard</h2>
    <form action="searchHandler.php" method="GET">
        <label for="search">Search Users:</label>
        <input type="text" id="search" name="search" placeholder="Enter username or email">
        <button type="submit">Search</button>
    </form>
    <br>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Username</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td>
                    <form action="updateHandler.php" method="POST" style="display:inline-block;">
                        <input type="hidden" name="id" value="1">
                        <input type="text" name="username" placeholder="New username">
                        <input type="text" name="email" placeholder="New email">
                        <button type="submit">Update</button>
                    </form>

                    <form action="deleteHandler.php" method="POST" style="display:inline-block;">
                        <input type="hidden" name="id" value="1">
                        <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
          
        </tbody>
    </table>
</body>
</html>