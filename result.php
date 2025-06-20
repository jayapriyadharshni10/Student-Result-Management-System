<?php
$id = $_POST['id'];
$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM students WHERE id='$id'";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student Result</title>
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

    .result-container {
      background: rgba(255, 255, 255, 0.95);
      backdrop-filter: blur(5px);
      border-radius: 15px;
      box-shadow: 0 0 15px rgba(0,0,0,0.1);
      padding: 30px;
      margin: 50px auto 100px auto;
      width: 90%;
      max-width: 700px;
    }

    .student-info p {
      font-size: 16px;
      margin: 5px 0;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-top: 20px;
    }

    th, td {
      padding: 10px;
      border-bottom: 1px solid #ccc;
      text-align: left;
    }

    th {
      background-color: #f2f2f2;
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

    /* Dark Mode */
    body.dark {
      background: linear-gradient(to right, #121212, #1e1e1e);
      color: #f5f5f5;
    }

    body.dark .result-container,
    body.dark .college-header,
    body.dark .footer,
    body.dark table {
      background-color: #2a2a2a;
      color: #ffffff;
      border-color: #555;
    }

    body.dark th {
      background-color: #333;
    }
  </style>
</head>
<body>

<button class="toggle-btn" onclick="toggleTheme()">Toggle Dark Mode</button>

<div class="college-header">
  <h1>ABC College of Engineering</h1>
  <p>Department of Electronics and Communication Engineering</p>
</div>

<div class="result-container">
<?php
if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();

    echo "<div class='student-info'>";
    echo "<p><strong>Student Name:</strong> " . $row['name'] . "</p>";
    echo "<p><strong>Student ID:</strong> " . $row['id'] . "</p>";
    echo "<p><strong>Department:</strong> ECE</p>";
    echo "<p><strong>Year:</strong> 3rd Year</p>";
    echo "</div>";

    echo "<table>";
    echo "<tr><th>Subject</th><th>Mark</th></tr>";

    $subjects = ['m4', 'ss', 'cs', 'trlf', 'adc', 'mp'];
    $total = 0;

    foreach ($subjects as $sub) {
        echo "<tr><td>" . strtoupper($sub) . "</td><td>" . $row[$sub] . "</td></tr>";
        $total += $row[$sub];
    }

    $avg = round($total / count($subjects), 2);
    $cgpa = round($avg / 10, 2);
    $grade = ($avg >= 90) ? "O" :
             (($avg >= 80) ? "A+" :
             (($avg >= 70) ? "A" :
             (($avg >= 60) ? "B+" :
             (($avg >= 50) ? "B" : "RA"))));

    echo "<tr><td><strong>Total</strong></td><td>$total</td></tr>";
    echo "<tr><td><strong>Average</strong></td><td>$avg</td></tr>";
    echo "<tr><td><strong>Grade</strong></td><td>$grade</td></tr>";
    echo "<tr><td><strong>CGPA</strong></td><td>$cgpa</td></tr>";
    echo "</table>";
} else {
    echo "<p>❌ No result found for ID: $id</p>";
}
$conn->close();
?>
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
