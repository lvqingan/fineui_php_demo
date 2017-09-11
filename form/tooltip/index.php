<?php
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\FineUIControls as F;
?>

<?php
echo F::Label()
    ->id('Label1')
    ->text('中国科学技术大学')
    ->toolTipTitle('中国科学技术大学')
    ->toolTip('中国科学技术大学是中国科学院所属的一所以前沿科学和高新技术为主、兼有特色管理和人文学科的综合性全国重点大学。')
?>
<br/>

<?php
echo F::HyperLink()
    ->id('HyperLink1')
    ->text('中国科学技术大学')
    ->toolTip('1958年9月创建于北京，首任校长由郭沫若兼任。它的创办被称为“我国教育史和科学史上的一项重大事件”。')
    ->toolTipTitle('中国科学技术大学')
    ->target('_blank')
    ->navigateUrl('http://www.ustc.edu.cn/')
?>
<br/>

<?php
echo F::Image()
    ->id('Image1')
    ->icon(\FineUI\Enums\Icon::WORLD)
    ->toolTip('这是一张象征地球的图片')
?>
<br/>

<?php
echo F::Image()
    ->id('Image2')
    ->imageWidth(32)
    ->imageHeight(32)
    ->imageCssStyle('border:solid 1px #ccc;padding:5px;')
    ->imageUrl('/res/images/logo/favicon.gif')
    ->toolTipAutoHide(false)
    ->toolTipTitle('不会自动消失的提示框')
    ->toolTip('这个提示不会自动消失，点击其他地方才会消失')
?>

<?php \FineUI\ResourceManager\ResourceManager::render(); ?>
<?php require_once '../../include/footer.php'; ?>
