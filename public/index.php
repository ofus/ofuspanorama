<?php

$filenames = Array();
foreach (glob("images/panorama/*.jpg") as $filename) {
    //echo "$filename size " . filesize($filename) . "\n";
    $filenames[] = $filename;
}

    ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>Ofus stuff</title>
    <meta name="description" content="Ofus's stuff" />
</head>
<body>
<div>
    <h2>Panoramas</h2>
    <ul>
        <li><a href="sprint.html" title="Sprint">Sprint</a></li>
        <li><a href="snow.html" title="Snow">Snow</a></li>
        <li><a href="snow2.html" title="snow2">Snow2</a></li>
        <li><a href="images/sprint" title="Sprint">More Sprint</a></li>
    </ul>
</div>
</body>
</html>
