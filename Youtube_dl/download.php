<?php
if (isset($_GET['videoLink'])) {
    $videoLink = $_GET['videoLink'];
    $downloadCommand = "python download.py " . escapeshellarg($videoLink);
    $output = shell_exec($downloadCommand);
    echo "Download completed. Check your downloads folder.";
} else {
    echo "Invalid video URL.";
}
?>
