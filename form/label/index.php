<?php
$sourceFiles = ['./form/label/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<style>
    .customlabel div {
        color: red;
        font-weight: bold;
    }
</style>

<?php
echo F::Label()
    ->id('Label1')
    ->text('普通的 Label 标签，会自动编码字符串（比如：<strong></strong>）')
?>
<br/>
<?php
echo F::Label()
    ->id('Label4')
    ->encodeText(false)
    ->text("<a href='http://www.ustc.edu.cn/' target='_blank'>中国科学技术大学（Label 标签生成的链接）</a>")
?>
<br/>
<?php
echo F::Label()
    ->id('Label2')
    ->encodeText(false)
    ->cssClass('customlabel')
    ->text('修改文本的样式（CssClass）')
?>
<br/>
<?php
echo F::Label()
    ->id('Label3')
    ->enabled(true)
    ->encodeText(false)
    ->text("<span style='color:red;font-weight:bold;'>修改文本的样式（内嵌HTML）</span>")
?>
<br/>
<?php
echo F::Button()
    ->id('btnChangeEnable')
    ->text('启用/禁用最后一个标签')
    ->onClick('./actions.php?action=btnChangeEnable_Click', array(
        'enabled' => new \FineUI\JsCode('F.ui.Label3.isEnabled()')
    ))
?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>
