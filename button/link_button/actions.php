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
            ->enabled(! json_decode($_POST['enabled']));

        UIHelper::result();
        break;
}