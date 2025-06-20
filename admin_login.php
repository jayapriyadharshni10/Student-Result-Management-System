<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
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

<!-- Admin Login Box -->
<div class="box">
    <h2>Admin Login</h2>
    <form action="admin_dashboard.php" method="POST">
        <label>Username:</label>
        <input type="text" name="username" required><br><br>
        <label>Password:</label>
        <input type="password" name="password" required><br><br>
        <input type="submit" value="Login">
    </form>
</div>

<!-- Dark Mode Toggle -->
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
