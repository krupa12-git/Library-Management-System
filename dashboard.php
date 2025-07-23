<?php
session_start();
if (!isset($_SESSION['admin'])) header("Location: index.php");
?>
<h2>Library Dashboard</h2>
<ul>
    <li><a href="add_book.php">Add Book</a></li>
    <li><a href="view_books.php">View Books</a></li>
    <li><a href="issue_book.php">Issue Book</a></li>
    <li><a href="return_book.php">Return Book</a></li>
</ul>
<a href="index.php">Logout</a>
