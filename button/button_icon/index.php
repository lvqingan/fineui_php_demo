<?php
$sourceFiles = ['./button/button_icon/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;
?>

    <div>
        <?php echo F::Button()
            ->id('btnIcon1')
            ->text('图标在左侧')
            ->icon(\FineUI\Enums\Icon::EMAIL)
            ->cssClass('marginr')
        ?>

        <?php echo F::Button()
            ->id('btnIcon2')
            ->text('图标在右侧')
            ->icon(\FineUI\Enums\Icon::STAR)
            ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
            ->cssClass('marginr')
        ?>
    </div>
    <br/>
    <div>
        <?php echo F::Button()
            ->id('btnIcon3')
            ->text('图标在上面')
            ->icon(\FineUI\Enums\Icon::EMAIL)
            ->iconAlign(\FineUI\Enums\IconAlign::TOP)
            ->cssClass('marginr')
        ?>

        <?php echo F::Button()
            ->id('btnIcon4')
            ->text('图标在下面')
            ->icon(\FineUI\Enums\Icon::STAR)
            ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
            ->cssClass('marginr')
        ?>
    </div>
    <br/>
    <div>
        <?php echo F::Button()
            ->id('btnCustomIcon')
            ->text('自定义图标（点击修改图标）')
            ->iconUrl('/res/images/16/1.png')
            ->onClick('./actions.php?action=btnCustomIcon_Click',
                new \FineUI\Parameter('iconUrl', 'this.icon')
            )
        ?>
    </div>
    <br/>
    只有图片的按钮：
    <br/>
    <div>
        <?php echo F::Button()
            ->iconUrl('/res/images/16/1.png')
            ->cssClass('marginr')
        ?>

        <?php echo F::Button()
            ->iconUrl('/res/images/16/8.png')
            ->cssClass('marginr')
        ?>
    </div>
    <br/>
    <div>
        <?php echo F::Button()
            ->text('图标在左侧')
            ->icon(\FineUI\Enums\Icon::EMAIL)
            ->size(\FineUI\Enums\ButtonSize::LARGE)
            ->cssClass('marginr')
        ?>

        <?php echo F::Button()
            ->text('图标在右侧')
            ->icon(\FineUI\Enums\Icon::STAR)
            ->size(\FineUI\Enums\ButtonSize::LARGE)
            ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
            ->cssClass('marginr')
        ?>
    </div>
    <br/>
    <div>
        <?php echo F::Button()
            ->text('图标在上面')
            ->icon(\FineUI\Enums\Icon::EMAIL)
            ->size(\FineUI\Enums\ButtonSize::LARGE)
            ->iconAlign(\FineUI\Enums\IconAlign::TOP)
            ->cssClass('marginr')
        ?>

        <?php echo F::Button()
            ->text('图标在下面')
            ->icon(\FineUI\Enums\Icon::STAR)
            ->size(\FineUI\Enums\ButtonSize::LARGE)
            ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
            ->cssClass('marginr')
        ?>
    </div>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>