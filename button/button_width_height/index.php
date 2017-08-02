<?php
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<?php
    echo F::Button()
        ->id('btnIcon1')
        ->text('图标在左侧')
        ->width(150)
        ->height(60)
        ->icon(\FineUI\Enums\Icon::EMAIL)
        ->cssClass('marginr');

    echo F::Button()
        ->id('btnIcon2')
        ->text('图标在右侧')
        ->width(150)
        ->height(60)
        ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
        ->icon(\FineUI\Enums\Icon::STAR);
?>

    <br>
    <br>

<?php
    echo F::Button()
        ->id('btnIcon3')
        ->text('图标在上面')
        ->width(150)
        ->height(60)
        ->iconAlign(\FineUI\Enums\IconAlign::TOP)
        ->icon(\FineUI\Enums\Icon::EMAIL)
        ->cssClass('marginr');

    echo F::Button()
        ->id('btnIcon4')
        ->text('图标在下面')
        ->width(150)
        ->height(60)
        ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
        ->icon(\FineUI\Enums\Icon::STAR);
?>
    <br>
    <br>
    只有图片的按钮：
    <br>
    <br>
<?php
    echo F::Button()
        ->id('Button1')
        ->iconUrl('/res/images/16/1.png')
        ->width(50)
        ->height(40)
        ->cssClass('marginr');

    echo F::Button()
        ->id('Button2')
        ->iconUrl('/res/images/16/8.png')
        ->width(50)
        ->height(40);
?>
    <br>
    <br>
    大按钮：
    <br>
    <br>
<?php
    echo F::Button()
        ->id('Button3')
        ->size(\FineUI\UI\Button::SIZE_LARGE)
        ->text('图标在左侧')
        ->width(150)
        ->height(80)
        ->icon(\FineUI\Enums\Icon::EMAIL)
        ->cssClass('marginr');

    echo F::Button()
        ->id('Button4')
        ->size(\FineUI\UI\Button::SIZE_LARGE)
        ->text('图标在右侧')
        ->width(150)
        ->height(80)
        ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
        ->icon(\FineUI\Enums\Icon::EMAIL);
?>
    <br>
    <br>
<?php
    echo F::Button()
        ->id('Button5')
        ->size(\FineUI\UI\Button::SIZE_LARGE)
        ->text('图标在上面')
        ->width(150)
        ->height(80)
        ->iconAlign(\FineUI\Enums\IconAlign::TOP)
        ->icon(\FineUI\Enums\Icon::EMAIL)
        ->cssClass('marginr');

    echo F::Button()
        ->id('Button6')
        ->size(\FineUI\UI\Button::SIZE_LARGE)
        ->text('图标在下面')
        ->width(150)
        ->height(80)
        ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
        ->icon(\FineUI\Enums\Icon::STAR);
?>
    <br>
    <br>
    <hr>
    <br>
    <br>
<?php
    echo F::Button()
        ->id('Button7')
        ->text('图标在左侧')
        ->width(150)
        ->height(60)
        ->iconFont(\FineUI\Enums\IconFont::HOME)
        ->cssClass('marginr');

    echo F::Button()
        ->id('Button8')
        ->text('图标在右侧')
        ->width(150)
        ->height(60)
        ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
        ->iconFont(\FineUI\Enums\IconFont::CAR);
?>
    <br>
    <br>
<?php
    echo F::Button()
        ->id('Button9')
        ->text('图标在上面')
        ->width(150)
        ->height(60)
        ->iconAlign(\FineUI\Enums\IconAlign::TOP)
        ->iconFont(\FineUI\Enums\IconFont::CAMERA)
        ->cssClass('marginr');

    echo F::Button()
        ->id('Button10')
        ->text('图标在下面')
        ->width(150)
        ->height(60)
        ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
        ->iconFont(\FineUI\Enums\IconFont::PHONE);
?>
    <br>
    <br>
    只有图片的按钮：
    <br>
    <br>
<?php
    echo F::Button()
        ->id('Button11')
        ->iconFont(\FineUI\Enums\IconFont::ANDROID)
        ->width(50)
        ->height(40)
        ->cssClass('marginr');

    echo F::Button()
        ->id('Button12')
        ->iconFont(\FineUI\Enums\IconFont::APPLE)
        ->width(50)
        ->height(40)
        ->cssClass('marginr');
?>
    <br>
    <br>
    大按钮：
    <br>
    <br>
<?php
    echo F::Button()
        ->id('Button15')
        ->size(\FineUI\UI\Button::SIZE_LARGE)
        ->text('图标在左侧')
        ->width(150)
        ->height(80)
        ->iconFont(\FineUI\Enums\IconFont::HOME)
        ->cssClass('marginr');

    echo F::Button()
        ->id('Button16')
        ->size(\FineUI\UI\Button::SIZE_LARGE)
        ->text('图标在右侧')
        ->width(150)
        ->height(80)
        ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
        ->iconFont(\FineUI\Enums\IconFont::HOME);
?>
    <br>
    <br>
<?php
    echo F::Button()
        ->id('Button17')
        ->size(\FineUI\UI\Button::SIZE_LARGE)
        ->text('图标在上面')
        ->width(150)
        ->height(80)
        ->iconAlign(\FineUI\Enums\IconAlign::TOP)
        ->iconFont(\FineUI\Enums\IconFont::CAMERA)
        ->cssClass('marginr');

    echo F::Button()
        ->id('Button18')
        ->size(\FineUI\UI\Button::SIZE_LARGE)
        ->text('图标在下面')
        ->width(150)
        ->height(80)
        ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
        ->iconFont(\FineUI\Enums\IconFont::PHONE);
?>
    <br>
    <br>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>