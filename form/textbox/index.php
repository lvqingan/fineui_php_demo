<?php
$sourceFiles = ['./form/textbox/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<?php
echo F::SimpleForm()
    ->id('SimpleForm1')
    ->bodyPadding(5)
    ->width(450)
    ->enableCollapse(true)
    ->title('登录表单')
    ->showHeader(true)
    ->items(
        F::TextBox()
            ->label('用户名')
            ->emptyText('请输入用户名')
            ->id('tbxUserName')
            ->required(true)
            ->showRedStart(true),
        F::TextBox()
            ->id('tbxPassword')
            ->label('密码')
            ->emptyText('请输入密码')
            ->textMode(\FineUI\Enums\TextMode::PASSWORD)
            ->required(true)
            ->showRedStart(true),
        F::Button()
            ->id('btnSubmit')
            ->cssClass('marginr')
            ->onClick('./actions.php?action=btnSubmit_Click', array(
                'userName' => new \FineUI\JsCode('F.ui.tbxUserName.getValue()'),
                'password' => new \FineUI\JsCode('F.ui.tbxPassword.getValue()')
            ))
            ->validateForms('SimpleForm1')
            ->text('登录'),
        F::Button()
            ->id('btnReset')
            ->text('重置')
            ->onClientClick('F.ui.SimpleForm1.reset();')
        );
?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>
