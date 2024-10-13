<?php
$file = 'messages.txt';
if (file_exists($file)) {
    $messages = file($file, FILE_IGNORE_NEW_LINES);
    foreach ($messages as $msg) {
        echo '<div>' . htmlspecialchars($msg) . '</div><br>';
    }
}
?>
