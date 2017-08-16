<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case '':

        UIHelper::result();
        break;
}