<?php
$sourceFiles = ['./button/button_group_press/actions.php'];
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
    ->isViewPort(true)
    ->bodyPadding(10)
    ->items(
        F::ButtonGroup()
            ->enablePressGroup(true)
            ->items(
                F::Button()
                    ->id('btnIcon1')
                    ->text('图标在左侧')
                    ->enablePress(true)
                    ->pressed(true)
                    ->icon(\FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->id('btnIcon2')
                    ->text('图标在左侧')
                    ->enablePress(true)
                    ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
                    ->icon(\FineUI\Enums\Icon::STAR),
                F::Button()
                    ->id('Button7')
                    ->text('图标在左侧')
                    ->enablePress(true)
                    ->iconFont(\FineUI\Enums\IconFont::HOME),
                F::Button()
                    ->id('Button8')
                    ->text('图标在右侧')
                    ->enablePress(true)
                    ->iconAlign(\FineUI\Enums\IconAlign::RIGHT)
                    ->iconFont(\FineUI\Enums\IconFont::CAR)
            ),
        F::ButtonGroup()
            ->id('ButtonGroup1')
            ->enablePressGroup(true)
            ->items(
                F::Button()
                    ->id('btnIcon3')
                    ->text('图标在上面')
                    ->enablePress(true)
                    ->iconAlign(FineUI\Enums\IconAlign::TOP)
                    ->icon(FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->id('btnIcon4')
                    ->text('图标在下面')
                    ->enablePress(true)
                    ->pressed(true)
                    ->iconAlign(FineUI\Enums\IconAlign::BOTTOM)
                    ->icon(FineUI\Enums\Icon::STAR),
                F::Button()
                    ->id('Button9')
                    ->text('图标在上面')
                    ->enablePress(true)
                    ->iconAlign(FineUI\Enums\IconAlign::TOP)
                    ->iconFont(FineUI\Enums\IconFont::CAMERA),
                F::Button()
                    ->id('Button10')
                    ->text('图标在下面')
                    ->enablePress(true)
                    ->iconAlign(FineUI\Enums\IconAlign::BOTTOM)
                    ->iconFont(FineUI\Enums\IconFont::PHONE)
            ),
        F::Label()->text('只有图片的按钮：'),
        F::ButtonGroup()
            ->id('ButtonGroup1')
            ->enablePressGroup(true)
            ->items(
                F::Button()
                    ->id('Button1')
                    ->enablePress(true)
                    ->iconUrl('/res/images/16/1.png'),
                F::Button()
                    ->id('Button2')
                    ->enablePress(true)
                    ->iconUrl('/res/images/16/8.png'),
                F::Button()
                    ->id('Button11')
                    ->enablePress(true)
                    ->pressed(true)
                    ->iconFont(\FineUI\Enums\IconFont::ANDROID),
                F::Button()
                    ->id('Button12')
                    ->enablePress(true)
                    ->iconFont(\FineUI\Enums\IconFont::APPLE),
                F::Button()
                    ->id('Button13')
                    ->enablePress(true)
                    ->iconFont(\FineUI\Enums\IconFont::CAR),
                F::Button()
                    ->id('Button14')
                    ->enablePress(true)
                    ->iconFont(\FineUI\Enums\IconFont::CC_MASTERCARD)
            ),
        F::Label()->text('下面的按钮分组的按下状态改变时，会触发自定义回发事件：'),
        F::ButtonGroup()
            ->id('ButtonGroup3')
            ->enablePressGroup(true)
            ->items(
                F::Button()
                    ->id('Button3')
                    ->text('按钮一')
                    ->enablePress(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                    ->icon(\FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->id('Button4')
                    ->text('按钮二')
                    ->enablePress(true)
                    ->pressed(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                    ->icon(\FineUI\Enums\Icon::STAR),
                F::Button()
                    ->id('Button5')
                    ->text('按钮三')
                    ->enablePress(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                    ->iconFont(\FineUI\Enums\IconFont::CAMERA),
                F::Button()
                    ->id('Button6')
                    ->text('按钮四')
                    ->enablePress(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                    ->iconFont(\FineUI\Enums\IconFont::PHONE)
            )
            ->onPressChanged('./actions.php?action=ButtonGroup_PressChanged',
                new \FineUI\Parameter('pressedInfo', 'getPressedInfo(this)')
            ),
        F::Label()->text('可以不选（AllowNonePress=true）：'),
        F::ButtonGroup()
            ->id('ButtonGroup4')
            ->enablePressGroup(true)
            ->allowNonePress(true)
            ->items(
                F::Button()
                    ->id('Button15')
                    ->text('按钮一')
                    ->enablePress(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                    ->icon(\FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->id('Button16')
                    ->text('按钮二')
                    ->enablePress(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                    ->icon(\FineUI\Enums\Icon::STAR),
                F::Button()
                    ->id('Button17')
                    ->text('按钮三')
                    ->enablePress(true)
                    ->pressed(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                    ->iconFont(\FineUI\Enums\IconFont::CAMERA),
                F::Button()
                    ->id('Button18')
                    ->text('按钮四')
                    ->enablePress(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                    ->iconFont(\FineUI\Enums\IconFont::PHONE)
            )
            ->onPressChanged('./actions.php?action=ButtonGroup_PressChanged',
                new \FineUI\Parameter('pressedInfo', 'getPressedInfo(this)')
            ),
        F::Label()->text('可以多选（AllowMultiPress=true）：'),
        F::ButtonGroup()
            ->id('ButtonGroup5')
            ->enablePressGroup(true)
            ->allowMultiPress(true)
            ->items(
                F::Button()
                    ->id('Button19')
                    ->text('按钮一')
                    ->enablePress(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                    ->icon(\FineUI\Enums\Icon::EMAIL),
                F::Button()
                    ->id('Button20')
                    ->text('按钮二')
                    ->enablePress(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                    ->icon(\FineUI\Enums\Icon::STAR),
                F::Button()
                    ->id('Button21')
                    ->text('按钮三')
                    ->enablePress(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                    ->iconFont(\FineUI\Enums\IconFont::CAMERA),
                F::Button()
                    ->id('Button22')
                    ->text('按钮四')
                    ->enablePress(true)
                    ->pressed(true)
                    ->size(\FineUI\Enums\ButtonSize::LARGE)
                    ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                    ->iconFont(\FineUI\Enums\IconFont::PHONE)
            )
            ->onPressChanged('./actions.php?action=ButtonGroup_PressChanged',
                new \FineUI\Parameter('pressedInfo', 'getPressedInfo(this)')
            )
    )
?>

<script>

    // 获取按钮分组按下状态的信息
    function getPressedInfo(btngroup) {
        var result = {
            id: btngroup.id,
            pressed: []
        };

        $.each(btngroup.items, function (index, btn) {
            if (btn.isPressed()) {
                // 按下按钮的显示文本
                result.pressed.push(btn.getText());
            }
        });

        return result;
    }


</script>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>

