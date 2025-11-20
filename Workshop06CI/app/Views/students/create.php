<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>
<h1>Add New Student</h1>
<form action="/students/store" method="post">

    <label>First Name:</label>
    <input type="text" name="first_name" required><br><br>
    
    <label>Last Name:</label>
    <input type="text" name="last_name" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" required><br><br>

    <select name="idCarrer" required>
    <option value="">Seleccione una carrera...</option>
    <?php foreach ($carreras as $carrera): ?>
        <option value="<?= $carrera['id'] ?>">
            <?= esc($carrera['carrera']) ?>
        </option>
    <?php endforeach; ?>
    </select>


    <button type="submit">Save</button>
</form>
</body>
</html>
