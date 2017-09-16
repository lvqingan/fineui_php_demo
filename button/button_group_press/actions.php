<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'ButtonGroup_PressChanged':
        // 将传入的字符串转换为 JSON 对象
        // 数据样本：{"id":"ButtonGroup5","pressed":["按钮一","按钮二","按钮四"]}

        // 生成提示信息

        $pressedInfo = $_POST['pressedInfo'];
        $sb = '';
        $sb .= sprintf('分组 %s 中按下的按钮：', $pressedInfo['id']);
        $sb .= '<ul>';
        if (isset($pressedInfo['pressed'])) {
            foreach ($pressedInfo['pressed'] as $pressedText) {
                $sb .= sprintf('<li>%s</li>', $pressedText);
            }
        }
        $sb .= '</ul>';

        UIHelper::showNotify($sb);

        echo UIHelper::result();

        break;
}