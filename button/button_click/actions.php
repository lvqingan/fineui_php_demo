<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'btnServerClick_Click':
        UIHelper::showNotify('这是服务器端事件');

        echo UIHelper::result();
        break;
    case 'btnChangeClientClick2_Click':
        UIHelper::Button('btnClientClick2')
            ->onClientClick(\FineUI\UI\Alert::getShowInTopScript("客户端事件已改变！"));

        echo UIHelper::result();
        break;
}