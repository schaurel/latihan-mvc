<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <h1>Todo List</h1>
    <form action="index.php" method="POST">
    <input type="text" name="judul" placeholder="Tulis todo baru...">
    <button type="submit" name="tambah">Tambah</button>
</form>

    <br>

    <?php if (empty($todos)): ?>
        <p>Tidak ada todo!</p>
    <?php else: ?>
        <ul>
            <?php foreach ($todos as $todo): ?>
                <li><?= $todo['judul'] ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>      

</body>
</html>