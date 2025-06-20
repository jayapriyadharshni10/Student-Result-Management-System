<?php
$conn = new mysqli("localhost", "root", "", "student_db");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get form data
$id = $_POST['id'];
$name = $_POST['name'];
$m4 = $_POST['m4'];
$ss = $_POST['ss'];
$cs = $_POST['cs'];
$trlf = $_POST['trlf'];
$adc = $_POST['adc'];
$mp = $_POST['mp'];

// Check for duplicate ID
$check = "SELECT * FROM students WHERE id='$id'";
$res = $conn->query($check);

if ($res->num_rows > 0) {
    echo "<h3 style='color:red;'>❌ Student ID '$id' already exists!</h3>";
    echo "<a href='admin_dashboard.php'>🔙 Go Back</a>";
    exit();
}

// Insert query
$sql = "INSERT INTO students (id, name, m4, ss, cs, trlf, adc, mp)
        VALUES ('$id', '$name', $m4, $ss, $cs, $trlf, $adc, $mp)";

// Check insert result
if ($conn->query($sql) === TRUE) {
    echo "<h3 style='color:green;'>✅ Result for '$name' added successfully!</h3>";
    echo "<a href='admin_dashboard.php'>🔙 Add Another</a>";
} else {
    echo "<h3 style='color:red;'>❌ Error: " . $conn->error . "</h3>";
}

$conn->close();
?>
