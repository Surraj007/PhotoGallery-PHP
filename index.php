<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Photo Gallery</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <header class="header">
            <h1>Welcome to Your Photo Gallery</h1>
            <p>Upload, view, and manage your images with ease.</p>
        </header>
        
        <form action="upload.php" method="post" enctype="multipart/form-data" class="upload-form">
            <label for="fileToUpload">Select Image to Upload:</label>
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>

        <div class="gallery">
            <?php
            $directory = 'uploads/';
            $images = glob($directory . "*.{jpg,jpeg,png,gif}", GLOB_BRACE);

            foreach ($images as $image) {
                echo '<div class="gallery-item">';
                echo '<a href="view.php?image=' . urlencode($image) . '" class="view-link">';
                echo '<img src="' . $image . '" alt="Gallery Image">';
                echo '</a>';
                echo '<a href="delete.php?file=' . urlencode($image) . '" class="delete-btn" onclick="return confirm(\'Are you sure you want to delete this image?\');">Delete</a>';
                echo '</div>';
            }
            ?>
        </div>
    </div>
</body>
</html>
