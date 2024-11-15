<<<<<<< HEAD
<?php
$servername = "localhost";
$username = "root";     // Replace with your MySQL username
$password = "";     // Replace with your MySQL password
$dbname = "file_upload";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if file ID is passed
if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    // Fetch the file from the database
    $stmt = $conn->prepare("SELECT name, type, content FROM files WHERE id = ?");
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $stmt->store_result();

    // Check if file exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($fileName, $fileType, $fileContent);
        $stmt->fetch();

        // Send headers to force download
        header("Content-Description: File Transfer");
        header("Content-Type: " . $fileType);
        header("Content-Disposition: attachment; filename=" . $fileName);
        header("Content-Length: " . strlen($fileContent));

        // Output the file content
        echo $fileContent;
    } else {
        echo "File not found.";
    }

    $stmt->close();
} else {
    echo "Invalid file ID.";
}

$conn->close();
?>
=======
<?php
$servername = "localhost";
$username = "root";     // Replace with your MySQL username
$password = "";     // Replace with your MySQL password
$dbname = "file_upload";  // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if file ID is passed
if (isset($_GET['id'])) {
    $fileId = $_GET['id'];

    // Fetch the file from the database
    $stmt = $conn->prepare("SELECT name, type, content FROM files WHERE id = ?");
    $stmt->bind_param("i", $fileId);
    $stmt->execute();
    $stmt->store_result();

    // Check if file exists
    if ($stmt->num_rows > 0) {
        $stmt->bind_result($fileName, $fileType, $fileContent);
        $stmt->fetch();

        // Send headers to force download
        header("Content-Description: File Transfer");
        header("Content-Type: " . $fileType);
        header("Content-Disposition: attachment; filename=" . $fileName);
        header("Content-Length: " . strlen($fileContent));

        // Output the file content
        echo $fileContent;
    } else {
        echo "File not found.";
    }

    $stmt->close();
} else {
    echo "Invalid file ID.";
}

$conn->close();
?>
>>>>>>> a36f62a (Added styles folder)
