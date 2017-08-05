<?php
$sourceFiles = ['./button/button_group_changetext/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<?php
echo F::Panel()
    ->id('Panel1')
    ->showBorder(true)
    ->bodyPadding(5)
    ->height(300)
    ->width(650)
    ->title('面板')
    ->toolbars(array(
        F::Toolbar()
            ->items(array(
                F::ButtonGroup()
                    ->id('ButtonGroup1')
                    ->items(array(
                        F::Button()
                            ->id('Button1')
                            ->text('按钮一')
                            ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                            ->icon(\FineUI\Enums\Icon::EMAIL),
                        F::Button()
                            ->id('Button2')
                            ->text('按钮二')
                            ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                            ->icon(\FineUI\Enums\Icon::STAR),
                        F::Button()
                            ->id('Button3')
                            ->text('按钮三')
                            ->iconAlign(\FineUI\Enums\IconAlign::TOP)
                            ->iconFont(\FineUI\Enums\IconFont::CAMERA),
                        F::Button()
                            ->id('Button4')
                            ->text('按钮四')
                            ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
                            ->iconFont(\FineUI\Enums\IconFont::PHONE)
                    ))
            ))
    ))
    ->items(array(
        F::Button()
            ->cssClass('marginr')
            ->id('btnChangeButtonText')
            ->text('修改[按钮四]的文本')
            ->onClick('./actions.php?action=btnChangeButtonText_Click', array(
                'text' => new \FineUI\JsCode('F.ui.Button4.getText()')
            )),
        F::Button()
            ->id('btnShowHideButton')
            ->text('显示隐藏[按钮四]')
            ->onClick('./actions.php?action=btnShowHideButton_Click', array(
                'hidden' => new \FineUI\JsCode('F.ui.Button4.isHidden()')
            ))
    ))
?>

<br/>
<br/>

<?php
echo F::ButtonGroup()
    ->id('ButtonGroup2')
    ->items(array(
        F::Button()
            ->id('Button5')
            ->text('按钮五')
            ->iconAlign(\FineUI\Enums\IconAlign::TOP)
            ->icon(\FineUI\Enums\Icon::EMAIL),
        F::Button()
            ->id('Button6')
            ->text('按钮六')
            ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
            ->icon(\FineUI\Enums\Icon::STAR),
        F::Button()
            ->id('Button7')
            ->text('按钮七')
            ->iconAlign(\FineUI\Enums\IconAlign::TOP)
            ->iconFont(\FineUI\Enums\IconFont::CAMERA),
        F::Button()
            ->id('Button8')
            ->text('按钮八')
            ->iconAlign(\FineUI\Enums\IconAlign::BOTTOM)
            ->iconFont(\FineUI\Enums\IconFont::PHONE)
    ))
?>

<br/>

<?php
echo F::Button()
    ->cssClass('marginr')
    ->id('btnChangeButtonText2')
    ->text('修改[按钮八]的文本')
    ->onClick('./actions.php?action=btnChangeButtonText2_Click', array(
        'text' => new \FineUI\JsCode('F.ui.Button8.getText()')
    ));
echo F::Button()
    ->id('btnShowHideButton2')
    ->text('显示隐藏[按钮八]')
    ->onClick('./actions.php?action=btnShowHideButton2_Click', array(
        'hidden' => new \FineUI\JsCode('F.ui.Button8.isHidden()')
    ));
?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>