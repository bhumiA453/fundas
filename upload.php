<?php
require 'db_connection.php';

header('Content-Type: application/json'); // Set the content type to JSON

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $response = ['status' => 'error', 'message' => ''];
    
    // Validate name
    if (empty($_POST['name'])) {
        $response['message'] = "Name is required!";
        echo json_encode($response);
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
                $response['message'] = "File {$fileName} is too large. Max size is 5MB.";
                echo json_encode($response);
                exit;
            }

            // Validate file type (e.g., images only)
            $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));
            $allowedExts = ['jpg', 'jpeg', 'png', 'gif'];
            if (!in_array($fileExt, $allowedExts)) {
                $response['message'] = "File {$fileName} is not an allowed type.";
                echo json_encode($response);
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
                    $response['status'] = 'success';
                    $response['message'] .= " {$fileName} uploaded successfully.<br>";
                } else {
                    $response['message'] = "Database error: " . $stmt->error;
                    echo json_encode($response);
                    exit;
                }

                $stmt->close();
            } else {
                $response['message'] = "Error uploading {$fileName}.";
                echo json_encode($response);
                exit;
            }
        }

        // echo implode('<br>', $response);
        echo json_encode($response);
    } else {
        $response['message'] = "No files uploaded!";
        echo json_encode($response);
    }

    $conn->close();
}
?>
