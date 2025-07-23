<?php include 'db.php'; ?>
<form method="post">
    <h3>Add New Book</h3>
    <input type="text" name="title" placeholder="Book Title" required><br>
    <input type="text" name="author" placeholder="Author" required><br>
    <input type="number" name="quantity" placeholder="Quantity" required><br>
    <button type="submit">Add Book</button>
</form>

<?php
if ($_POST) {
    $stmt = $conn->prepare("INSERT INTO books (title, author, quantity) VALUES (?, ?, ?)");
    $stmt->bind_param("ssi", $_POST['title'], $_POST['author'], $_POST['quantity']);
    $stmt->execute();
    echo "✅ Book Added!";
}
?>
