<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'Button1_Click':
        $imageWidth = json_decode($_POST['imageWidth']);
        $image3 = UIHelper::Image('Image3');

        if ($imageWidth == 32) {
            $image3->imageWidth(64);
            $image3->imageHeight(64);
        } else {
            $image3->imageWidth(32);
            $image3->imageHeight(32);
        }

        echo UIHelper::result();
        break;
}