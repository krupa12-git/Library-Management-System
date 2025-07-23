<?php include 'db.php'; ?>
<form method="post">
    <h3>Return Book</h3>
    <input type="number" name="issue_id" placeholder="Issued ID" required><br>
    <button type="submit">Return</button>
</form>

<?php
if ($_POST) {
    $stmt = $conn->prepare("UPDATE issued_books SET return_date = CURDATE(), returned = 1 WHERE id = ?");
    $stmt->bind_param("i", $_POST['issue_id']);
    $stmt->execute();
    echo "✅ Book Returned!";
}
?>
