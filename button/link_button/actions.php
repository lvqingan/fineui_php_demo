<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'LinkButton3_Click':
        UIHelper::showNotify('这是服务器端事件');

        UIHelper::result();
        break;
    case 'btnChangeEnable_Click':
        UIHelper::LinkButton('LinkButton1')
            ->enabled(! json_decode($_POST['enabled']))
            ->text('客户端事件（在页面中定义）')
            ->onClientClick('clickLinkButton();')
        ;

        UIHelper::result();
        break;
}