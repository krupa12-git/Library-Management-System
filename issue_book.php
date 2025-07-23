<?php include 'db.php'; ?>
<form method="post">
    <h3>Issue Book</h3>
    <input type="number" name="book_id" placeholder="Book ID" required><br>
    <input type="number" name="student_id" placeholder="Student ID" required><br>
    <button type="submit">Issue</button>
</form>

<?php
if ($_POST) {
    $stmt = $conn->prepare("INSERT INTO issued_books (book_id, student_id, issue_date) VALUES (?, ?, CURDATE())");
    $stmt->bind_param("ii", $_POST['book_id'], $_POST['student_id']);
    $stmt->execute();
    echo "✅ Book Issued!";
}
?>
