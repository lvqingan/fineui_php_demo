<?php
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\FineUIControls as F;
?>

<?php
echo F::Panel()
    ->id('Panel1')
    ->showBorder(false)
    ->showHeader(false)
    ->autoScroll(true)
    ->layout(\FineUI\Enums\LayoutType::VBOX)
    ->boxConfigChildMargin('0 0 10 0')
    ->isViewPort(true)
    ->bodyPadding('10')
    ->items(
        F::ButtonGroup()
            ->layout(\FineUI\Enums\LayoutType::VBOX)
            ->boxConfigAlign(FineUI\Enums\BoxLayoutAlign::STRETCH_MAX)
            ->vertical(true)
            ->items(
                F::Button()
                    ->text('图标在左侧')
                    ->icon(FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->text('图标在右侧')
                    ->iconAlign(FineUI\Enums\IconAlign::RIGHT)
                    ->icon(FineUI\Enums\Icon::STAR),
                F::Button()
                    ->text('图标在左侧')
                    ->iconFont(FineUI\Enums\IconFont::HOME),
                F::Button()
                    ->text('图标在右侧')
                    ->iconAlign(FineUI\Enums\IconAlign::RIGHT)
                    ->iconFont(FineUI\Enums\IconFont::CAR)
            ),
        F::ButtonGroup()
            ->layout(\FineUI\Enums\LayoutType::VBOX)
            ->boxConfigAlign(FineUI\Enums\BoxLayoutAlign::STRETCH_MAX)
            ->vertical(true)
            ->items(
                F::Button()
                    ->text('图标在上面')
                    ->iconAlign(FineUI\Enums\IconAlign::TOP)
                    ->icon(FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->text('图标在下面')
                    ->iconAlign(FineUI\Enums\IconAlign::BOTTOM)
                    ->icon(FineUI\Enums\Icon::STAR),
                F::Button()
                    ->text('图标在上面')
                    ->iconAlign(FineUI\Enums\IconAlign::TOP)
                    ->iconFont(FineUI\Enums\IconFont::CAMERA),
                F::Button()
                    ->text('图标在下面')
                    ->iconAlign(FineUI\Enums\IconAlign::BOTTOM)
                    ->iconFont(FineUI\Enums\IconFont::PHONE)
            ),
        F::Label()->text('只有图片的按钮：'),
        F::ButtonGroup()
            ->layout(\FineUI\Enums\LayoutType::VBOX)
            ->boxConfigAlign(FineUI\Enums\BoxLayoutAlign::STRETCH_MAX)
            ->vertical(true)
            ->items(
                F::Button()
                    ->iconUrl('/res/images/16/1.png'),
                F::Button()
                    ->iconUrl('/res/images/16/8.png'),
                F::Button()
                    ->iconFont(\FineUI\Enums\IconFont::ANDROID),
                F::Button()
                    ->iconFont(\FineUI\Enums\IconFont::APPLE),
                F::Button()
                    ->iconFont(\FineUI\Enums\IconFont::CAR),
                F::Button()
                    ->iconFont(\FineUI\Enums\IconFont::CC_MASTERCARD)
            ),
        F::Label()->text('Size（Large）：'),
        F::ButtonGroup()
            ->layout(\FineUI\Enums\LayoutType::VBOX)
            ->boxConfigAlign(FineUI\Enums\BoxLayoutAlign::STRETCH_MAX)
            ->vertical(true)
            ->items(
                F::Button()
                    ->text('图标在上面')
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                    ->icon(FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->text('图标在下面')
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                    ->icon(FineUI\Enums\Icon::STAR),
                F::Button()
                    ->text('图标在上面')
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                    ->iconFont(FineUI\Enums\IconFont::CAMERA),
                F::Button()
                    ->text('图标在下面')
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                    ->iconFont(FineUI\Enums\IconFont::PHONE)
            )
    )
?>

<?php \FineUI\ResourceManager\ResourceManager::render(); ?>
<?php require_once '../../include/footer.php'; ?>
