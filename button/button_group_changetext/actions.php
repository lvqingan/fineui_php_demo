<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'btnChangeButtonText_Click':
        $text = $_POST['text'];
        UIHelper::Button('Button4')
            ->text(mb_strlen($text) == 3 ? '按钮四（' . date('Y/n/j H:i:s') . '）' : '按钮四');

        echo UIHelper::result();

        break;
    case 'btnShowHideButton_Click':
        $hidden = json_decode($_POST['hidden']);

        UIHelper::Button('Button4')->hidden(! $hidden);

        echo UIHelper::result();

        break;
    case 'btnChangeButtonText2_Click':
        $text = $_POST['text'];
        UIHelper::Button('Button8')
            ->text(mb_strlen($text) == 3 ? '按钮八（' . date('Y/n/j H:i:s') . '）' : '按钮八');

        echo UIHelper::result();

        break;
    case 'btnShowHideButton2_Click':
        $hidden = json_decode($_POST['hidden']);

        UIHelper::Button('Button8')->hidden(! $hidden);

        echo UIHelper::result();

        break;
}