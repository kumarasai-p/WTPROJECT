<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];

    // Insert data into the events table
    $sql = "INSERT INTO registrations (name, email, event) VALUES ('$name', '$email', '$event')";

    if ($conn->query($sql) === TRUE) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>



<?php
// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "event_management";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch events from the database
$sql = "SELECT name, email, event FROM registrations";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "<div class='event-item'>";
        echo "<h3>" . $row['event'] . "</h3>";
        echo "<p>Registered by: " . $row['name'] . " (" . $row['email'] . ")</p>";
        echo "</div>";
    }
} else {
    echo "No events found.";
}

$conn->close();
?>
