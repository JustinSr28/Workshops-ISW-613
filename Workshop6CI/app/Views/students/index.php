<!DOCTYPE html>
<html>
<head>
    <title>Students</title>
    <link rel="stylesheet" href="<?= base_url('css/styles.css') ?>">
</head>
<body>
    <h1>Students List</h1>

    <table border="1" cellpadding="5">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Email</th>
                <th>Carrera</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $student): ?>
                <tr>
                    <td><?= esc($student['first_name']) ?></td>
                    <td><?= esc($student['last_name']) ?></td>
                     <td><?= esc($student['email']) ?></td>
                    <td><?= esc($student['carrera']) ?></td>
                    <td>
                        <a href="<?= base_url('students/edit/' . $student['id']) ?>">Editar</a> |
                        <a href="<?= base_url('students/delete/' . $student['id']) ?>" onclick="return confirm('¿Seguro?')">Eliminar</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

    <br>
    <a href="<?= base_url('students/create') ?>">+ Agregar nuevo estudiante</a>
</body>
</html>
