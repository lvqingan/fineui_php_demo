<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'btnChangeEnable_Click':
        UIHelper::Button('btnEnable')
            ->enabled(true)
            ->text('本按钮已经启用（点击弹出对话框）');

        UIHelper::result();
        break;
    case 'btnEnable_Click':
        UIHelper::showNotify('你点击了刚刚启用的按钮');

        UIHelper::result();
        break;
    case 'btnChangePressed_Click':
        UIHelper::Button('btnPressed')
            ->pressed(false);

        UIHelper::result();
        break;
    case 'btnTooltip_Click':
        UIHelper::Button('btnTooltip')
            ->tooltip('这是修改后的提示信息！');

        UIHelper::result();
        break;
}