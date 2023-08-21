<?php
if (isset($_GET['file'])) {
    $file = $_GET['file'];
    header('Content-Type: audio/mpeg');
    header('Content-Disposition: inline; filename="' . $file . '"');
    header('Content-Length: ' . filesize($file));
    readfile($file);
}
?>