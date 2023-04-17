<?php
if(isset($_POST['note']) && isset($_POST['timestamp'])) {
    $note = $_POST['note'];
    $timestamp = $_POST['timestamp'];
    $log = "{$timestamp} {$note}\n";
    $file = 'Logger.txt';
    if(file_exists($file)) {
        $contents = file_get_contents($file);
        $new_contents = $log . $contents;
        file_put_contents($file, $new_contents, LOCK_EX);
    } else {
        file_put_contents($file, $log, LOCK_EX);
    }
}
?>