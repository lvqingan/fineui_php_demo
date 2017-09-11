<?php
$sourceFiles = ['./button/button_click/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\FineUIControls as F;
?>

<?php echo F::Button()
    ->id('btnServerClick')
    ->text('服务器端事件')
    ->onClick('./actions.php?action=btnServerClick_Click')
?>
    <br/>
    <br/>
<?php echo F::Button()
    ->id('btnClientClick')
    ->text('客户端事件')
    ->onClientClick("alert('这是客户端事件');")
?>
    <br/>
    <br/>
<?php echo F::Button()
    ->id('btnClientClick2')
    ->text('客户端事件(提示对话框)')
    ->onClientClick('F.alert({"message":"这是客户端事件","target":"_top"})')
?>
    <br/>
    <br/>
<?php echo F::Button()
    ->id('btnChangeClientClick2')
    ->text('改变上个按钮的客户端事件')
    ->onClick('./actions.php?action=btnChangeClientClick2_Click')
?>

<?php \FineUI\ResourceManager\ResourceManager::render(); ?>
<?php require_once '../../include/footer.php'; ?>