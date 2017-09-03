<?php
$sourceFiles = ['./form/calendar_mindate/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

$calendar1DateFormatString = 'Y-m-d';
$button1Text = sprintf('选中%s', (new DateTime())->add(new DateInterval('P2D'))->format($calendar1DateFormatString));
?>

<?php
echo F::Calendar()
    ->id('Calendar1')
    ->dateFormatString($calendar1DateFormatString)
    ->selectedDate((new DateTime())->add(new DateInterval('P10D')))
    ->minDate(new DateTime())
    ->maxDate((new DateTime())->add(new DateInterval('P20D')))
    ->onDateSelect('./actions.php?action=Calendar1_DateSelect',
        new \FineUI\Parameter('selectedDate', 'F.ui.Calendar1.getText()')
    )
?>
<br/>
<br/>

<?php
echo F::Button()
    ->id('Button1')
    ->onClick('./actions.php?action=Button1_Click')
    ->text($button1Text)
?>
<br/>
<br/>

<?php
echo F::Label()
    ->id('labResult')
?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>


