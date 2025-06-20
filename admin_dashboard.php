<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] != "admin" || $_POST['password'] != "1234") {
        echo "Invalid login. <a href='admin_login.php'>Try again</a>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body.dark {
            background-color: #1e1e1e;
            color: #f5f5f5;
        }

        body.dark .box,
        body.dark .college-header,
        body.dark .footer {
            background-color: #2a2a2a;
            color: #ffffff;
            border-color: #555;
        }

        .toggle-btn {
            position: fixed;
            top: 10px;
            right: 10px;
            padding: 8px 16px;
            background: #333;
            color: #fff;
            border: none;
            cursor: pointer;
            border-radius: 5px;
        }
    </style>
</head>
<body>

<!-- College Header -->
<div class="college-header">
    <h1>ABC College of Engineering</h1>
    <p>Department of Electronics and Communication Engineering</p>
</div>

<!-- Admin Form -->
<div class="box">
    <h2>Enter Student Result</h2>
    <form action="insert.php" method="POST">
        <label>Student ID:</label><br>
        <input type="text" name="id" required><br><br>

        <label>Name:</label><br>
        <input type="text" name="name" required><br><br>

        <label>M4:</label><br><input type="number" name="m4" required><br>
        <label>SS:</label><br><input type="number" name="ss" required><br>
        <label>CS:</label><br><input type="number" name="cs" required><br>
        <label>TRLF:</label><br><input type="number" name="trlf" required><br>
        <label>ADC:</label><br><input type="number" name="adc" required><br>
        <label>MP:</label><br><input type="number" name="mp" required><br><br>

        <input type="submit" value="Save">
    </form>
</div>

<!-- Dark Mode Button -->
<button class="toggle-btn" onclick="toggleTheme()">Toggle Dark Mode</button>

<script>
function toggleTheme() {
    document.body.classList.toggle("dark");
}
</script>

<!-- Footer -->
<div class="footer">
    <p>Created by Jayapriyadharshni S | © 2025 ABC College</p>
</div>

</body>
</html>
