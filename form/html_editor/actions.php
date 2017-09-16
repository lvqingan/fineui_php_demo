<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'Button1_Click':
        $content = $_POST['content'];
        UIHelper::TextArea('TextArea1')
            ->text(html_entity_decode($content));

        echo UIHelper::result();
        break;
    case 'Button2_Click':
        $content = $_POST['content'];
        UIHelper::HtmlEditor('HtmlEditor1')
            ->text($content);

        echo UIHelper::result();
        break;
}