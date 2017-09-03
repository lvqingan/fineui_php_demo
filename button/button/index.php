<?php
$sourceFiles = ['./button/button/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;
?>
    <div>
        <?php
        echo F::Button()
            ->id('btnChangeEnable')
            ->text('启用/禁用后面的按钮')
            ->cssClass('marginr')
            ->onClick('./actions.php?action=btnChangeEnable_Click')
        ?>

        <?php
        echo F::Button()
            ->id('btnEnable')
            ->text('禁用的按钮')
            ->enabled(false)
            ->onClick('./actions.php?action=btnEnable_Click')
        ?>
    </div>
    <br/>
    <div>
        <?php
        echo F::Button()
            ->id('btnChangePressed')
            ->text('改变后面按钮的按下状态')
            ->cssClass('marginr')
            ->onClick('./actions.php?action=btnChangePressed_Click',
                new \FineUI\Parameter('pressed', 'F.ui.btnPressed.isPressed()')
            )
        ?>
        <?php
        echo F::Button()
            ->id('btnPressed')
            ->text('按下的按钮')
            ->enablePress(true)
            ->pressed(true)
        ?>
    </div>
    <br/>
    <div>
        <?php
        echo F::Button()
            ->id('btnTooltip')
            ->text('这个按钮有提示信息（点击改变提示信息）')
            ->tooltip('这是按钮的提示信息')
            ->onClick('./actions.php?action=btnTooltip_Click')
        ?>
    </div>
    <br/>
    <div>
        <?php
        echo F::Button()
            ->text('小按钮')
            ->cssClass('marginr')
            ->size(\FineUI\Enums\ButtonSize::SMALL)
        ?>
        <?php
        echo F::Button()
            ->text('普通按钮')
            ->cssClass('marginr')
        ?>
        <?php
        echo F::Button()
            ->text('中等大小按钮')
            ->cssClass('marginr')
            ->size(\FineUI\Enums\ButtonSize::MEDIUM)
        ?>
        <?php
        echo F::Button()
            ->text('大按钮')
            ->cssClass('marginr')
            ->size(\FineUI\Enums\ButtonSize::LARGE)
        ?>
    </div>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>