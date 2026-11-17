<?php 
require __DIR__ . '/assets/functions.php';

$db_path = "../private/db.txt";

$count = readInt($db_path);
if (array_key_exists('increment', $_POST)) {
    $count = readInt($db_path)+1;
    writeInt($count, $db_path);
}

$head = render("components/head");
$header = render("components/head");
$home = render("components/home");
$footer = render("components/head");

?>


<!DOCTYPE html>
<html lang="de">

<head>
    <?= $head; ?>
</head>

<body>
    <header>
        <?= $header; ?>
    </header>
    
    <main>
        <?= $home; ?>
    </main>

    <footer>
        <?= $footer; ?>
    </footer
</body>

</html>
