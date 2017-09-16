<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'btnChangeEnable_Click':
        $hyperLink2 = UIHelper::HyperLink('HyperLink2');
        $enabled = json_decode($_POST['enabled']);

        if (! $enabled) {
            $hyperLink2->enabled(true);
            $hyperLink2->onClientClick(\FineUI\UI\Alert::getShowInTopScript('这是链接的客户端提示'));
        } else {
            $hyperLink2->enabled(false);
            $hyperLink2->onClientClick("");
        }

        echo UIHelper::result();
        break;
}