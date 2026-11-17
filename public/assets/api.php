<?php
function render(string $file, array $data = []): string
{
    extract($data);

    ob_start();
    include __DIR__ . "/../$file.php";
    return ob_get_clean();
}

function readInt($file) {
    $db = fopen($file, "r");
    $x = (int)fgets($db);
    fclose($db);

    return $x;
}

function writeInt($num, $file) {
    $db = fopen($file, "w");
    fwrite($db, $num);
    fclose($db);
}
?>