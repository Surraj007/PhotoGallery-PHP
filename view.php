<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Image</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <?php
        if (isset($_GET['image'])) {
            $image = urldecode($_GET['image']);
            echo '<div class="view-image">';
            echo '<img src="' . htmlspecialchars($image) . '" alt="Gallery Image">';
            echo '</div>';
        }
        ?>
        <a href="index.php" class="back-btn">Back to Gallery</a>
    </div>
</body>
</html>
