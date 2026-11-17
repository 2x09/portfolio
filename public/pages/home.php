<?php 
$db_path = "../private/db.txt";
$count = readInt($db_path);
if (array_key_exists('increment', $_POST)) {
    $count = readInt($db_path)+1;
    writeInt($count, $db_path);
}
?>
<section class="center">
    <h1> Portfolio von 2x10 </h1>
    <p>
    --------------------------------------------------------------<br>
    wer das liest ist cool<br>
    --------------------------------------------------------------
    </p>
    <img src="assets/image/lain.jpeg" height="140" alt="let's all love lain"><br><br>
    <p> dieser knopf wurde <?= $count; ?> mal gedrückt. </p>
    <form method="post">
        <input type="submit" name="increment" value="click me">
    </form>   
</section>