<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'btnCustomIcon_Click':
        UIHelper::Button('btnCustomIcon')
            ->iconUrl('/res/images/16/8.png');

        UIHelper::result();
        break;
}