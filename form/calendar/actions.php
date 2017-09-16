<?php
require_once '../../lib/FineUI/autoload.php';
$action = $_GET['action'];

use \FineUI\UIHelper;

switch ($action) {
    case 'Calendar1_DateSelect':
        $selectedDate = $_POST['selectedDate'];

        updateResult(DateTime::createFromFormat('Y-m-d', $selectedDate));

        echo UIHelper::result();

        break;

    case 'Button1_Click':
        $selectedDate = (new DateTime())->add(new DateInterval('P2D'));

        UIHelper::Calendar('Calendar1')->selectedDate($selectedDate);

        updateResult($selectedDate);

        echo UIHelper::result();

        break;
}

/**
 * @param DateTime $datetime
 */
function updateResult($datetime) {
    UIHelper::Label('labResult')
        ->text(sprintf('选择的日期：%s', $datetime->format('Y-m-d')));
}