<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'btnChangeEnable_Click':
        $enabled = json_decode($_POST['enabled']);

        UIHelper::Label('Label3')->enabled(! $enabled);

        echo UIHelper::result();
        break;
}