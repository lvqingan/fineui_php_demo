<?php
$sourceFiles = ['./button/link_button/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<?php echo F::LinkButton()
    ->id('LinkButton2')
    ->text('客户端事件（服务器生成）')
    ->onClientClick('F.alert({message:"这是在服务器端生成的客户端事件",target:"_top"})')
?>
    <br/>
    <br/>
<?php echo F::LinkButton()
    ->id('LinkButton3')
    ->text('服务器端事件')
    ->onClick('./actions.php?action=LinkButton3_Click')
?>
    <br/>
    <br/>
<?php echo F::LinkButton()
    ->id('LinkButton1')
    ->enabled(false)
    ->text('客户端事件（在页面中定义）')
    ->onClientClick('clickLinkButton();')
?>
    <br/>
    <br/>
<?php echo F::Button()
    ->id('btnChangeEnable')
    ->text('启用/禁用最后一个链接按钮')
    ->onClick('./actions.php?action=btnChangeEnable_Click',
        new \FineUI\Parameter('enabled', 'F.ui.LinkButton1.isEnabled()')
    )
?>
    <script>
        function clickLinkButton() {
            F.alert("定义在页面中的客户端事件！");
        }
    </script>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>