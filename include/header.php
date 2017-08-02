<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title></title>
    <link href="/f/f.css" rel="stylesheet"/>
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
<script src="/f/f.js"></script>
<script src="/res/js/common.js"></script>