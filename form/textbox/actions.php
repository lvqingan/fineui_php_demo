<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'btnSubmit_Click':
        $userName = $_POST['userName'];
        $password = $_POST['password'];

        UIHelper::Label('labResult')
            ->text('用户名：' . $userName . ' 密码：' . $password);

        UIHelper::result();
        break;
}