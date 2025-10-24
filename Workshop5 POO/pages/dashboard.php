<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>

<body>
  <h1>Welcome to the Dashboard</h1>
  <p>This is a protected area of the website.</p>
<?php

session_start();
if (!isset($_SESSION['username'])) {
    header("Location: ../index.php");
    exit();
}

require_once('../common/Users.php');
$users = new Users();
$usersList = $users->getAllUsers();
?>

<h1>Welcome to the Dashboard</h1>
<p>Hello, <?php echo htmlspecialchars($_SESSION['username']); ?>!</p>
<a href="../actions/logout.php">Logout</a>

<?php if (!empty($usersList)): ?>
    <h2>Users</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Last Name</th>
            <th>Username</th>
            <th>Role</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($usersList as $user): ?>
            <tr>
                <td><?php echo $user['Id']; ?></td>
                <td><?php echo htmlspecialchars($user['name']); ?></td>
                <td><?php echo htmlspecialchars($user['lastName']); ?></td>
                <td><?php echo htmlspecialchars($user['username']); ?></td>
                <td><?php echo htmlspecialchars($user['role']); ?></td>
                <td><?php echo htmlspecialchars($user['status']); ?></td>
                <td>
                    <a href='../pages/editUser.php?Id=<?php echo $user['Id']; ?>'>Edit</a> | 
                    <a href='../actions/deleteUser.php?Id=<?php echo $user['Id']; ?>'>Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
<?php else: ?>
    <p>No users found.</p>
<?php endif; ?>
</body>

</html>