<?php
if (isset($_GET['file'])) {
    $file = urldecode($_GET['file']);
    if (file_exists($file)) {
        unlink($file);
    }}

header("Location: index.php");
?>
