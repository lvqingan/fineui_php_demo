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
<script src="/f/f.js"></script>
<script src="/res/js/common.js"></script>
<script src="/fineuiphp.js"></script>