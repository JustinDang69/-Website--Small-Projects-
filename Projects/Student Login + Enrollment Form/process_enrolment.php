<?php
// Start session
session_start();

// If user did not come from the login page, block access
if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.php');
    exit;
}

$errors = [];
$fullname = $studentid = $course = "";

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname  = trim($_POST['fullname']);
    $studentid = trim($_POST['studentid']);
    $course    = trim($_POST['course']);

    // Basic validation
    if (empty($fullname)) {
        $errors[] = "Full Name is required.";
    }
    if (empty($studentid) ||  !preg_match("/^[0-9]{6}$/",$studentid)) {
        $errors[] = "Student ID must be a 6-digit number.";
    }
    if (empty($course)) {
        $errors[] = "Course selection is required.";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Enrolment Confirmation</title>
    <style>

    </style>
</head>

<body>

<h2>Enrolment Confirmation</h2>

<?php
#If Error has message, display them in a list

if (!empty($errors)) {
    echo "<div class='error'><ul>";
    foreach ($errors as $e) {
        echo "<li>$e</li>";
    echo "</ul></div>";
    }
    echo "<p><a href='enrolment.html'>Go back to Enrolment Form</a></p>";

}


else {
    echo "<div class='success-box'>";
    echo "<h3>✅ Enrolment Successful </h3>";
    echo "<p>The following details have been recorded:</p>";
    echo "<table>
            <tr><th>Full Name</th><td>" . htmlspecialchars($fullname) . "</td></tr>
            <tr><th>Student ID</th><td>" . htmlspecialchars($studentid) . "</td></tr>
            <tr><th>Course</th><td>" . htmlspecialchars($course) . "</td></tr>
          </table>";
    echo "</div>";
} 
    
?>

</body>
</html>
