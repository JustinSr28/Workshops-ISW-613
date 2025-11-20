<!DOCTYPE html>
<html>
<head>
    <title>Edit Student</title>
</head>
<body>
<h1>Edit Student</h1>

<form action="<?= base_url('students/update/' . $student['id']) ?>" method="post">

    <label>First Name:</label>
    <input type="text" name="first_name" value="<?= esc($student['first_name']) ?>" required><br><br>

    <label>Last Name:</label>
    <input type="text" name="last_name" value="<?= esc($student['last_name']) ?>" required><br><br>

    <label>Email:</label>
    <input type="email" name="email" value="<?= esc($student['email']) ?>" required><br><br>

    <label>Carrera:</label>
    <select name="idCarrer" required>
        <option value="">Seleccione una carrera...</option>
        <?php foreach ($carreras as $carrera): ?>
            <option value="<?= $carrera['id'] ?>" <?= ($carrera['id'] == $student['idCarrer']) ? 'selected' : '' ?>>
                <?= esc($carrera['carrera']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <button type="submit">Update</button>
</form>
</body>
</html>

