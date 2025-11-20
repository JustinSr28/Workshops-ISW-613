<!DOCTYPE html>
<html>
<head>
    <title>Create Student</title>
</head>
<body>

<h1>Add new Student</h1>

<form action="<?= base_url('students/store') ?>" method="post">

    <label>Nombre:</label>
    <input type="text" name="first_name" required><br><br>
    
    <label>Apellido:</label>
    <input type="text" name="last_name" required><br><br>

    <label>Email:</label>
    <input type="text" name="email" required><br><br>


    <label>Carrera:</label>
    <select name="idCarrer" required>
        <option value="">Seleccione una carrera...</option>
        <?php foreach ($carreras as $carrera): ?>
            <option value="<?= $carrera['id'] ?>">
                <?= esc($carrera['carrera']) ?>
            </option>
        <?php endforeach; ?>
    </select>
    <br><br>

    <button type="submit">Guardar</button>
</form>

</body>
</html>
