<?php 
require __DIR__ . '/assets/api.php';
require __DIR__ . '/assets/config.php';

$page_current = $_GET['page'] ?? 'home';

if (!array_key_exists($page_current, $page_paths)) {
    $page_current = 'home';
}

$page = render($page_paths[$page_current]);

$head = render("components/head");
$header = render('components/header', [
    'page_current'  => $page_current,
    'nav_items'     => $page_names,
    'seperator'     => $seperator
]);
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
        <?= $page; ?>
    </main>

    <footer>
        <?= $footer; ?>
    </footer>
</body>

</html>
