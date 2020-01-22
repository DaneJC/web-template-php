<!-- include/require this script above the DOCTYPE in the header.php -->
<?php
$title = basename($_SERVER['SCRIPT_FILENAME'], '.php');
$title = str_replace('_', ' ', $title);
if ($title == 'index') {
 $title = 'home';
}
$title = ucwords($title);
