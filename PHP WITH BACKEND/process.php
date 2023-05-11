<?php
// Connect to the database (replace with your own credentials)
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "your_database_name";
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Store the submitted answers in the database
$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];

$sql = "INSERT INTO answers (q1, q2, q3, q4, q5) VALUES ('$q1', '$q2', '$q3', '$q4', '$q5')";

if ($conn->query($sql) === TRUE) {
    echo "Answers stored successfully.<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Calculate the score
$score = 0;

// Define the correct answers
$correctAnswers = array(
    "Paris",
    "Mercury",
    "Au",
    "Leonardo da Vinci",
    "Pacific Ocean"
);

// Check the user's answers and calculate the score
if ($q1 === $correctAnswers[0]) {
    $score++;
}
if ($q2 === $correctAnswers[1]) {
    $score++;
}
if ($q3 === $correctAnswers[2]) {
    $score++;
}
if ($q4 === $correctAnswers[3]) {
    $score++;
}
if ($q5 === $correctAnswers[4]) {
    $score++;
}

// Display the score
echo "Your score: " . $score . "/5";

// Close the database connection
$conn->close();

