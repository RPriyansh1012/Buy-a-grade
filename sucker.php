<?php

echo '<h1>Form input values</h1>';
echo '<p>Your Name: ' . htmlspecialchars($_POST['name'] ?? '') . '</p>';

$section = $_POST['name'] ?? [];
if (!is_array($section)) {
    $section = [$section];
}



foreach($_POST as $key => $value) {
    print "<p>$key = $value\n</p>";
}
?>