<?php
require 'db_connection.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = [];
    
    // Validate name
    if (empty($_POST['name'])) {
        echo "Name is required!";
        exit;
    }

    $name = $_POST['name'];
    // echo '<pre>';print_r($_FILES);exit();
    // Check if files are uploaded
    if (isset($_FILES['files'])) {
        $fileCount = count($_FILES['files']['name']);
        $uploadDir = 'uploads/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }

        for ($i = 0; $i < $fileCount; $i++) {
            $fileName = $_FILES['files']['name'][$i];
            $fileTmpName = $_FILES['files']['tmp_name'][$i];
            $fileSize = $_FILES['files']['size'][$i];
            $fileError = $_FILES['files']['error'][$i];

            // Validate file size (e.g., max 5MB)
            if ($fileSize > 5 * 1024 * 1024) {
                echo "File {$fileName} is too large. Max size is 5MB.";
                exit;
            }

            // Validate file type (e.g., images only)
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($fileExt, $allowedExts)) {
                echo "File {$fileName} is not an allowed type.";
                exit;
            }

            // Handle file upload
            $newFileName = uniqid('', true) . '.' . $fileExt;
            $fileDestination = $uploadDir . $newFileName;

            if (move_uploaded_file($fileTmpName, $fileDestination)) {
                $filePath = $conn->real_escape_string($fileDestination);
                $stmt = $conn->prepare("INSERT INTO gallery (name, pic) VALUES (?, ?)");
                $stmt->bind_param('ss', $name, $filePath);

                if ($stmt->execute()) {
                    $response[] = " {$fileName} ";
                } else {
                    echo "Database error: " . $stmt->error;
                    exit;
                }

                $stmt->close();
            } else {
                echo "Error uploading {$fileName}.";
                exit;
            }
        }

        echo implode('<br>', $response);
    } else {
        echo "No files uploaded!";
    }

    $conn->close();
}
?>
