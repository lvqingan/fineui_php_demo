<?php
$sourceFiles = ['./button/button_iconfont/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\FineUIControls as F;
?>
    <div>
        <?php echo F::Button()
            ->id('btnIcon1')
            ->text('图标在左侧')
            ->iconFont(\FineUI\Enums\IconFont::HOME)
            ->cssClass('marginr')
        ?>
        <?php echo F::Button()
            ->id('btnIcon2')
            ->text('图标在右侧')
            ->iconFont(\FineUI\Enums\IconFont::CAR)
            ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
            ->cssClass('marginr')
        ?>
    </div>
    <br/>
    <div>
        <?php echo F::Button()
            ->id('btnIcon3')
            ->text('图标在上面')
            ->iconFont(\FineUI\Enums\IconFont::CAMERA)
            ->iconAlign(\FineUI\Enums\IconAlign::TOP)
            ->cssClass('marginr')
        ?>
        <?php echo F::Button()
            ->id('btnIcon4')
            ->text('图标在下面')
            ->iconFont(\FineUI\Enums\IconFont::PHONE)
            ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
            ->cssClass('marginr')
        ?>
    </div>
    <br/>
    <div>
        <?php echo F::Button()
            ->id('btnCustomIconFont')
            ->text('点击修改图标（在三个图标之前切换）')
            ->iconFont(\FineUI\Enums\IconFont::VOLUME_UP)
            ->onClick('./actions.php?action=btnCustomIconFont_Click',
                new \FineUI\Parameter('iconFont', 'this.iconFont')
            )
        ?>
    </div>
    <br/>
    只有图片的按钮：
    <br/>
    <br/>
    <div>
        <?php echo F::Button()
            ->iconFont(\FineUI\Enums\IconFont::ANDROID)
            ->cssClass('marginr')
        ?>
        <?php echo F::Button()
            ->iconFont(\FineUI\Enums\IconFont::APPLE)
            ->cssClass('marginr')
        ?>
        <?php echo F::Button()
            ->iconFont(\FineUI\Enums\IconFont::CAR)
            ->cssClass('marginr')
        ?>
        <?php echo F::Button()
            ->iconFont(\FineUI\Enums\IconFont::CC_MASTERCARD)
            ->cssClass('marginr')
        ?>
    </div>
    <br/>
    大按钮：
    <br/>
    <br/>
    <div>
        <?php echo F::Button()
            ->text('图标在左侧')
            ->iconFont(\FineUI\Enums\IconFont::HOME)
            ->size(\FineUI\Enums\ButtonSize::LARGE)
            ->cssClass('marginr')
        ?>

        <?php echo F::Button()
            ->text('图标在右侧')
            ->iconFont(\FineUI\Enums\IconFont::CAR)
            ->size(\FineUI\Enums\ButtonSize::LARGE)
            ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
            ->cssClass('marginr')
        ?>
    </div>
    <br/>
    <div>
        <?php echo F::Button()
            ->text('图标在上面')
            ->iconFont(\FineUI\Enums\IconFont::CAMERA)
            ->size(\FineUI\Enums\ButtonSize::LARGE)
            ->iconAlign(\FineUI\Enums\IconAlign::TOP)
            ->cssClass('marginr')
        ?>

        <?php echo F::Button()
            ->text('图标在下面')
            ->iconFont(\FineUI\Enums\IconFont::PHONE)
            ->size(\FineUI\Enums\ButtonSize::LARGE)
            ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
            ->cssClass('marginr')
        ?>
    </div>

<?php require_once '../../include/footer.php'; ?>