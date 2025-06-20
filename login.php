<!DOCTYPE html>
<html>
<head>
  <title>Student Login</title>
  <link rel="stylesheet" href="style.css">
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
      background: linear-gradient(to right, #dbe9ff, #fff1e6);
      background-attachment: fixed;
    }

    .college-header {
      background-color: #004080;
      color: white;
      padding: 15px;
      text-align: center;
    }

    .box {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(5px);
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      padding: 25px;
      margin: 80px auto;
      width: 90%;
      max-width: 400px;
    }

    input[type="text"],
    input[type="submit"] {
      width: 90%;
      padding: 10px;
      margin: 10px 0;
      border-radius: 5px;
      border: 1px solid #ccc;
    }

    input[type="submit"] {
      background-color: #004080;
      color: white;
      cursor: pointer;
      border: none;
    }

    .toggle-btn {
      position: fixed;
      top: 10px;
      right: 10px;
      background: #222;
      color: white;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    .footer {
      background-color: #222;
      color: #ccc;
      padding: 10px;
      text-align: center;
      position: fixed;
      bottom: 0;
      width: 100%;
    }

    body.dark {
      background: linear-gradient(to right, #121212, #1e1e1e);
      color: #f5f5f5;
    }

    body.dark .box,
    body.dark .college-header,
    body.dark .footer {
      background-color: #2a2a2a;
      color: #ffffff;
      border-color: #555;
    }
  </style>
</head>
<body>

<div class="college-header">
  <h1>ABC College of Engineering</h1>
  <p>Department of Electronics and Communication Engineering</p>
</div>

<button class="toggle-btn" onclick="toggleTheme()">Toggle Dark Mode</button>

<div class="box">
  <h2>Student Login</h2>
  <form action="result.php" method="POST">
    <label>Student ID:</label><br>
    <input type="text" name="id" required><br><br>
    <input type="submit" value="View Result">
  </form>
</div>

<div class="footer">
  <p>Created by Jayapriyadharshni S | © 2025 ABC College</p>
</div>

<script>
function toggleTheme() {
  document.body.classList.toggle("dark");
}
</script>

</body>
</html>
