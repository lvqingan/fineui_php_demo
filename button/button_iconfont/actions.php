<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'btnCustomIconFont_Click':
        $fonts = array(\FineUI\Enums\IconFont::VOLUME_UP, \FineUI\Enums\IconFont::VOLUME_DOWN, \FineUI\Enums\IconFont::VOLUME_OFF);
        $idx = array_search($_POST['iconFont'], $fonts);
        $nextFont = $fonts[($idx + 1) % 3 == 0 ? 0 : ($idx + 1)];

        UIHelper::Button('btnCustomIconFont')
            ->iconFont($nextFont);

        echo UIHelper::result();
        break;
}