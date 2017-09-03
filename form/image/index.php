<?php
$sourceFiles = ['./form/image/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

Icon="World"：
<br/>

<?php
echo F::Image()
    ->id('Image1')
    ->icon(\FineUI\Enums\Icon::WORLD)
?>

<br/>
ImageUrl="/res/icon/world.png"：
<br/>

<?php
echo F::Image()
    ->id('Image2')
    ->imageUrl('/res/icon/world.png')
?>

<br>
ImageUrl="/res/images/logo/favicon.gif" ImageCssStyle="border:solid 1px #ccc;padding:5px;"：
<br>

<?php
echo F::Image()
    ->id('Image3')
    ->imageWidth(32)
    ->imageHeight(32)
    ->imageCssStyle('border:solid 1px #ccc;padding:5px;')
    ->imageUrl('/res/images/logo/favicon.gif')
?>

<br/>

<?php
echo F::Button()
    ->text('改变图片的大小')
    ->id('Button1')
    ->onClick('./actions.php?action=Button1_Click',
        new \FineUI\Parameter('imageWidth', 'F.ui.Image3.getWidth()')
    )
?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>
