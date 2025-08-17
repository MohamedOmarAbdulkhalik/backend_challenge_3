<!DOCTYPE html>
<html>
<head>
    <title>Library - Books</title>
</head>
<body>
    <h1>Books</h1>
    <a href="/books/create">Add New Book</a>
    
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Available</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?= htmlspecialchars($book['title']) ?></td>
            <td><?= htmlspecialchars($book['author']) ?></td>
            <td><?= htmlspecialchars($book['isbn']) ?></td>
            <td><?= htmlspecialchars($book['available_quantity']) ?></td>
            <td>
                <a href="/books/edit/<?= $book['id'] ?>">Edit</a>
                <a href="/books/delete/<?= $book['id'] ?>" onclick="return confirm('Are you sure?')">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>