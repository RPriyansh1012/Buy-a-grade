<?php

$required = ['name', 'section', 'cardnumber', 'cardtype'];

foreach ($required as $field)
{
    if (!isset($_POST[$field]) || (is_array($_POST[$field]) && empty($_POST[$field])))
    {
        echo '<h1>Sorry</h1>';
        echo '<p>You did not fill out the form completely. <a href="buyagrade.html">Try again?</a></p>';
        exit;
    }
}


$name = trim($_POST['name']);

$section = $_POST['section'];

if (is_array($section))
{
    $section = $section[0];
}

$section = trim($section);


$cardnumber = trim($_POST['cardnumber']);

$cardtype = trim($_POST['cardtype']);


$line = $name . ';' . $section . ';' . $cardnumber . ';' . $cardtype . PHP_EOL;


file_put_contents('suckers.html', $line, FILE_APPEND);


$all = file_get_contents('suckers.html');


echo '<h2>The current database contains:</h2>';

echo '<pre>' . htmlspecialchars($all) . '</pre>';

?>