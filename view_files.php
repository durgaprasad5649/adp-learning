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

// Retrieve category, branch, and subject from URL
$category = isset($_GET['category']) ? $_GET['category'] : '';
$branch = isset($_GET['branch']) ? $_GET['branch'] : '';
$subject = isset($_GET['subject']) ? $_GET['subject'] : '';

// Fetch files based on category, branch, and subject
$sql = "SELECT id, branch, subject, category, name, size, type FROM files WHERE category = ? AND branch = ? AND subject = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $category, $branch, $subject);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploaded Files for <?php echo htmlspecialchars("$category - $branch - $subject"); ?></title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .download-btn {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h2>Files for <?php echo htmlspecialchars("$category - $branch - $subject"); ?></h2>

<table>
    <tr>
        <th>File Name</th>
        <th>Size (KB)</th>
        <th>Type</th>
        <th>Action</th>
    </tr>

    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo number_format($row['size'] / 1024, 2); ?></td>
                <td><?php echo htmlspecialchars($row['type']); ?></td>
                <td><a class="download-btn" href="download.php?id=<?php echo $row['id']; ?>">Download</a></td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="4">No files found for this category, branch, and subject.</td></tr>
    <?php endif; ?>

</table>

</body>
</html>

<?php
$stmt->close();
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

// Retrieve category, branch, and subject from URL
$category = isset($_GET['category']) ? $_GET['category'] : '';
$branch = isset($_GET['branch']) ? $_GET['branch'] : '';
$subject = isset($_GET['subject']) ? $_GET['subject'] : '';

// Fetch files based on category, branch, and subject
$sql = "SELECT id, branch, subject, category, name, size, type FROM files WHERE category = ? AND branch = ? AND subject = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $category, $branch, $subject);
$stmt->execute();
$result = $stmt->get_result();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Uploaded Files for <?php echo htmlspecialchars("$category - $branch - $subject"); ?></title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        .download-btn {
            color: #007bff;
            text-decoration: none;
        }
    </style>
</head>
<body>

<h2>Files for <?php echo htmlspecialchars("$category - $branch - $subject"); ?></h2>

<table>
    <tr>
        <th>File Name</th>
        <th>Size (KB)</th>
        <th>Type</th>
        <th>Action</th>
    </tr>

    <?php if ($result->num_rows > 0): ?>
        <?php while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?php echo htmlspecialchars($row['name']); ?></td>
                <td><?php echo number_format($row['size'] / 1024, 2); ?></td>
                <td><?php echo htmlspecialchars($row['type']); ?></td>
                <td><a class="download-btn" href="download.php?id=<?php echo $row['id']; ?>">Download</a></td>
            </tr>
        <?php endwhile; ?>
    <?php else: ?>
        <tr><td colspan="4">No files found for this category, branch, and subject.</td></tr>
    <?php endif; ?>

</table>

</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
>>>>>>> a36f62a (Added styles folder)
