<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Image</title>
    <style>
        .image-container {
            margin: 10px;
        }
        img {
            max-width: 200px;
            display: block;
        }
    </style>
</head>
<body>
    <h1>Select an Image</h1>
    <div id="image-list">
        <?php
        $folder = 'images'; // Path to the folder
        $images = array_diff(scandir($folder), array('.', '..')); // Fetch all files, exclude . and ..

        foreach ($images as $image) {
            // Remove the file extension and replace underscores with spaces
            $displayName = str_replace('_', ' ', pathinfo($image, PATHINFO_FILENAME));
            echo "
                <div class='image-container'>
                    <p>$displayName</p>
                    <button onclick=\"selectImage('$image')\">Select $displayName</button>
                </div>
            ";
        }
        ?>
    </div>

    <h2>Selected Image</h2>
    <div id="selected-image">
        <p>No image selected.</p>
    </div>

    <script>
        function selectImage(imageName) {
            const selectedImageDiv = document.getElementById("selected-image");

            selectedImageDiv.innerHTML = `
                <p>You selected: ${imageName.replace(/_/g, ' ').replace(/\.[^/.]+$/, '')}</p>
                <img src="images/${imageName}" alt="${imageName}">
            `;
        }
    </script>
</body>
</html>
