<?php
$file = 'Logger.txt';
if (file_exists($file)) {
  $notes = file($file);
  foreach($notes as $note) {
    $timestampEnd = strpos($note, ']') + 1;
    $noteContent = substr($note, $timestampEnd);
    $timestamp = substr($note, 0, $timestampEnd);
    echo '<div class="note">';
    echo '<div class="timestamp">'.$timestamp.'</div>';
    echo '<div class="content">'.$noteContent.'</div>';
    echo '</div>';
  }
}
?>