<?php
// define variables and set to empty values
$name = $email = $age = $overall = $design = $language = $other = "";

if ($_SERVER["REQUEST_METOD"] == "GET") {
    $name = test_input($_GET["name"]);
    $email = test_input($_GET["email"]);
    $age = test_input($_GET["age"]);
    $overall = test_input($_GET["overall"]);
    $design = test_input($_GET["design"]);
    $language = test_input($_GET["language"]);
    $other = test_input($_GET["other"]);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>