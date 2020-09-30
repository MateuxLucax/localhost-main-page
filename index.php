<?php

// Get folders
$pathToHTML = $_SERVER['DOCUMENT_ROOT'];

$files = scandir($pathToHTML);

array_splice($files, 0, 2);
$index = array_search("assets", $files);
array_splice($files, $index, 1);

$folders = [];

foreach ($files as $file) {
    if (is_dir($file)) {
        array_push($folders, $file);
    }
}
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=2.0">

    <!-- Favicons -->
    <link rel="icon" href="/assets/icons/favicon.svg">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/icons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/icons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/icons/favicon-16x16.png">
    <link rel="mask-icon" href="/assets/icons/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#00aba9">
    <meta name="theme-color" content="#f4f5f6">

    <!-- Style -->
    <link rel="stylesheet" href="assets/style.css">

    <!-- Webfonts -->
    <link rel="dns-prefetch" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin />
    <link href="https://fonts.googleapis.com/css?family=Nunito:700" rel="stylesheet" />

    <title>Apache Localhost &mdash; MateuxLucax</title>
</head>

<body>
    <header>
        <img src="/assets/icons/favicon.svg" alt="Icon">
        <h1>Apache Localhost</h1>
    </header>
    <main>
    <?php
        foreach ($folders as $folder) {
    ?>
        <a href="<?php echo $folder ?>/"><?php echo $folder ?> &rarr;</a>
    <?php
        }
    ?>
    </main>
</body>

</html>
