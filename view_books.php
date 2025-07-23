<?php include 'db.php'; ?>
<h3>All Books</h3>
<table border="1">
    <tr><th>ID</th><th>Title</th><th>Author</th><th>Quantity</th></tr>
    <?php
    $result = $conn->query("SELECT * FROM books");
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
            <td>{$row['id']}</td><td>{$row['title']}</td>
            <td>{$row['author']}</td><td>{$row['quantity']}</td>
        </tr>";
    }
    ?>
</table>
