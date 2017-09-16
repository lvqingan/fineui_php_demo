<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'btnCloseWindow_Click':
        UIHelper::Window('Window1')->hide();
        UIHelper::TriggerBox('TriggerBox1')->text('弹出窗口被关闭了');

        echo UIHelper::result();
        break;
}