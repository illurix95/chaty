<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST['message']) && !empty($_POST['name'])) {
    $name = htmlspecialchars($_POST['name']);
    $message = htmlspecialchars($_POST['message']);
    $file = 'messages.txt';
    file_put_contents($file, "$name: $message\n", FILE_APPEND);
}
?>
