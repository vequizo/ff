<?php
// Database credentials
$servername = "localhost";  // Change this if your database is hosted elsewhere
$username = "vequizo";         // Your database username
$password = "vequizo";             // Your database password
$dbname = "lovely";      // Your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $firstname = $_POST['firstname'];
    $middlename = $_POST['middlename'];
    $lastname = $_POST['lastname'];
    $age = $_POST['age'];
    $address = $_POST['address'];
    $courseandsec = $_POST['courseandsec'];

    // SQL query to insert data into the database
    $sql = "INSERT INTO users (firstname, middlename, lastname, age, address, courseandsec)
            VALUES ('$firstname', '$middlename', '$lastname', '$age', '$address', '$courseandsec')";

    if ($conn->query($sql) === TRUE) {
        echo "<h3>Form Submitted and Data Stored Successfully</h3>";
        echo "<p>Firstname: $firstname</p>";
        echo "<p>Middle: $middlename</p>";
        echo "<p>Lastname: $lastname</p>";
        echo "<p>Age: $age</p>";
        echo "<p>Address: $address</p>";
        echo "<p>Course & Section: $courseandsec</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the connection
    $conn->close();
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ubuntu Server-PHP Deployment</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-4">
        <h2>Ubuntu Server-PHP Deployment - Ellysha Lao</h2>
        <form action="" method="POST">
            <div class="mb-3">
                <label>Firstname:</label>
                <input type="text" name="firstname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Middle:</label>
                <input type="text" name="middlename" class="form-control">
            </div>
            <div class="mb-3">
                <label>Lastname:</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Age:</label>
                <input type="number" name="age" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Address:</label>
                <input type="text" name="address" class="form-control" required>
            </div>
            <div class="mb-3">
                <label>Course & Section:</label>
                <input type="text" name="courseandsec" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
