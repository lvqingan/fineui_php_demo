<?php
$sourceFiles = ['./form/hyperlink/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<?php
echo F::HyperLink()
    ->id('HyperLink3')
    ->text('新窗口打开百度首页')
    ->target('_blank')
    ->navigateUrl('http://www.baidu.com')
?>
<br/>
<?php
echo F::HyperLink()
    ->id('HyperLink1')
    ->encodeText(false)
    ->text("新窗口打开 <span style='color:red;'>Google</span> 首页")
    ->target('_blank')
    ->navigateUrl('http://www.google.com/')
?>
<br/>
<?php
echo F::HyperLink()
    ->id('HyperLink2')
    ->enabled(false)
    ->text('点击弹出对话框')
    ->navigateUrl('javascript:;')
?>
<br/>
<?php
echo F::Button()
    ->id('btnChangeEnable')
    ->text('启用/禁用最后一个链接')
    ->onClick('./actions.php?action=btnChangeEnable_Click', array(
        'enabled' => new \FineUI\JsCode('F.ui.HyperLink2.isEnabled()')
    ))
?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>
