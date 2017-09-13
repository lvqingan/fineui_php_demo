<?php
\FineUI\UI\PageManager\PageManager::instance()
    ->language($_COOKIE['Language_JS'])
    ->theme($_COOKIE['Theme_JS']);

\FineUI\ResourceManager\ResourceManager::run()
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php
        if (isset($sourceFiles) && is_array($sourceFiles) && count($sourceFiles)) {
            foreach ($sourceFiles as $sourceFile) {
                ?>
                <meta name="sourcefiles" content="<?php echo $sourceFile ?>" />
                <?php
            }
        }
    ?>
    <link href="/res/css/common.css" rel="stylesheet"/>
</head>
<body>