<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'TextBox1_TextChanged':
        $text = $_POST['text'];

        UIHelper::Label('labResult1')
            ->text('文本框一：' . $text);

        echo UIHelper::result();
        break;
    case 'TextBox2_Blur':
        $text = $_POST['text'];

        UIHelper::Label('labResult2')
            ->text('文本框二：' . $text);

        echo UIHelper::result();
        break;
}