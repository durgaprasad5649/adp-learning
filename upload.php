<<<<<<< HEAD
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "file_upload";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['branch'], $_POST['subject'], $_POST['category'], $_FILES['file'])) {
    $branch = $_POST['branch'];
    $subject = $_POST['subject'];
    $category = $_POST['category'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileContent = file_get_contents($fileTmpName);

    // Prepare and bind statement to insert file data
    $stmt = $conn->prepare("INSERT INTO files (branch, subject, category, name, size, type, content) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssibs", $branch, $subject, $category, $fileName, $fileSize, $fileType, $fileContent);

    if ($stmt->execute()) {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    alert('File uploaded successfully to ' + '$branch - $subject - $category' + '!');
                    window.location.href = 'index0.php';
                });
              </script>";
    } else {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    alert('File upload failed.');
                    window.location.href = 'index0.php';
                });
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>
=======
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "file_upload";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_POST['branch'], $_POST['subject'], $_POST['category'], $_FILES['file'])) {
    $branch = $_POST['branch'];
    $subject = $_POST['subject'];
    $category = $_POST['category'];
    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileType = $_FILES['file']['type'];
    $fileContent = file_get_contents($fileTmpName);

    // Prepare and bind statement to insert file data
    $stmt = $conn->prepare("INSERT INTO files (branch, subject, category, name, size, type, content) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssibs", $branch, $subject, $category, $fileName, $fileSize, $fileType, $fileContent);

    if ($stmt->execute()) {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    alert('File uploaded successfully to ' + '$branch - $subject - $category' + '!');
                    window.location.href = 'index0.php';
                });
              </script>";
    } else {
        echo "<script>
                document.addEventListener('DOMContentLoaded', function() {
                    alert('File upload failed.');
                    window.location.href = 'index0.php';
                });
              </script>";
    }

    $stmt->close();
}

$conn->close();
?>
>>>>>>> a36f62a (Added styles folder)
