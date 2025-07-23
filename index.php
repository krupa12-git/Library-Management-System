<?php
session_start();
if ($_POST['username'] == 'admin' && $_POST['password'] == 'admin') {
    $_SESSION['admin'] = true;
    header("Location: dashboard.php");
}
?>
<form method="post">
    <h2>Library Admin Login</h2>
    <input type="text" name="username" placeholder="Username" required /><br>
    <input type="password" name="password" placeholder="Password" required /><br>
    <button type="submit">Login</button>
</form>
