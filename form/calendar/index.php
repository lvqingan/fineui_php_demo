<?php
$sourceFiles = ['./form/calendar/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<?php
echo F::Calendar()
    ->id('Calendar1')
    ->dateFormatString('yyyy-mm-dd')
    ->selectedDate((new DateTime())->add(new DateInterval('P10D')))
    ->onDateSelect('./actions.php?action=Calendar1_DateSelect', array(
        'selectedDate' => new \FineUI\JsCode('F.ui.Calendar1.getText()')
    ))
?>
<br/>
<br/>

<?php
echo F::Button()
    ->id('Button1')
    ->onClick('./actions.php?action=Button1_Click')
    ->text(sprintf('选中%s', (new DateTime())->add(new DateInterval('P2D'))->format('Y-m-d')))
?>
<br/>
<br/>

<?php
echo F::Label()
    ->id('labResult')
?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>
