<?php
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $headline = htmlspecialchars((trim($_POST['headline'])));
    $message = htmlspecialchars((trim($_POST['message'])));

    $data = "\nName: $name\n Email: $email\n About: $headline\n Details: $message\n";

    file_put_contents('rants_and_bants.txt', $data, FILE_APPEND | LOCK_EX);

    header("Location: index.php?status=success");
    exit();
} else {
    header("index.php?status=error");
    exit();
}
?>