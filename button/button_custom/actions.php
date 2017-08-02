<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'Button1_Click':
        UIHelper::showNotify('点击了普通按钮');

        UIHelper::result();
        break;
    case 'Button2_Click':
        UIHelper::showNotify('点击了自定义按钮');

        UIHelper::result();
        break;
}