<?php
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

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
    ->items(array(
        F::ButtonGroup()
            ->items(array(
                F::Button()
                    ->id('btnIcon1')
                    ->text('图标在左侧')
                    ->icon(FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->id('btnIcon2')
                    ->text('图标在右侧')
                    ->iconAlign(FineUI\Enums\IconAlign::RIGHT)
                    ->icon(FineUI\Enums\Icon::STAR),
                F::Button()
                    ->id('btnIcon7')
                    ->text('图标在左侧')
                    ->iconFont(FineUI\Enums\IconFont::HOME),
                F::Button()
                    ->id('btnIcon8')
                    ->text('图标在右侧')
                    ->iconAlign(FineUI\Enums\IconAlign::RIGHT)
                    ->iconFont(FineUI\Enums\IconFont::CAR)
            )),
        F::ButtonGroup()
            ->id('ButtonGroup1')
            ->items(array(
                F::Button()
                    ->id('btnIcon3')
                    ->text('图标在上面')
                    ->iconAlign(FineUI\Enums\IconAlign::TOP)
                    ->icon(FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->id('btnIcon4')
                    ->text('图标在下面')
                    ->iconAlign(FineUI\Enums\IconAlign::BOTTOM)
                    ->icon(FineUI\Enums\Icon::STAR),
                F::Button()
                    ->id('btnIcon9')
                    ->text('图标在上面')
                    ->iconAlign(FineUI\Enums\IconAlign::TOP)
                    ->iconFont(FineUI\Enums\IconFont::CAMERA),
                F::Button()
                    ->id('btnIcon10')
                    ->text('图标在下面')
                    ->iconAlign(FineUI\Enums\IconAlign::BOTTOM)
                    ->iconFont(FineUI\Enums\IconFont::PHONE)
            )),
        F::Label()->text('只有图片的按钮：'),
        F::ButtonGroup()
            ->id('ButtonGroup2')
            ->items(array(
                F::Button()
                    ->id('Button1')
                    ->iconUrl('/res/images/16/1.png'),
                F::Button()
                    ->id('Button2')
                    ->iconUrl('/res/images/16/8.png'),
                F::Button()
                    ->id('Button11')
                    ->iconFont(\FineUI\Enums\IconFont::ANDROID),
                F::Button()
                    ->id('Button12')
                    ->iconFont(\FineUI\Enums\IconFont::APPLE),
                F::Button()
                    ->id('Button13')
                    ->iconFont(\FineUI\Enums\IconFont::CAR),
                F::Button()
                    ->id('Button14')
                    ->iconFont(\FineUI\Enums\IconFont::CC_MASTERCARD),
            )),
            F::Label()->text('Size（Large）：'),
            F::ButtonGroup()
                ->id('ButtonGroup2')
                ->items(array(
                    F::Button()
                        ->id('Button3')
                        ->text('图标在上面')
                        ->size(\FineUI\Enums\ButtonSize::LARGE)
                        ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                        ->icon(FineUI\Enums\Icon::EMAIL),
                    F::Button()
                        ->id('Button4')
                        ->text('图标在下面')
                        ->size(\FineUI\Enums\ButtonSize::LARGE)
                        ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                        ->icon(FineUI\Enums\Icon::STAR),
                    F::Button()
                        ->id('Button5')
                        ->text('图标在上面')
                        ->size(\FineUI\Enums\ButtonSize::LARGE)
                        ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                        ->iconFont(FineUI\Enums\IconFont::CAMERA),
                    F::Button()
                        ->id('Button6')
                        ->text('图标在下面')
                        ->size(\FineUI\Enums\ButtonSize::LARGE)
                        ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                        ->iconFont(FineUI\Enums\IconFont::PHONE)
                ))
    ));

?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>