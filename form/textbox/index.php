<?php
$sourceFiles = ['./form/textbox/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\FineUIControls as F;
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
            ->showRedStar(true),
        F::TextBox()
            ->id('tbxPassword')
            ->label('密码')
            ->emptyText('请输入密码')
            ->textMode(\FineUI\Enums\TextMode::PASSWORD)
            ->required(true)
            ->showRedStar(true),
        F::Button()
            ->id('btnSubmit')
            ->cssClass('marginr')
            ->onClick('./actions.php?action=btnSubmit_Click',
                new \FineUI\Parameter('userName', 'F.ui.tbxUserName.getValue()'),
                new \FineUI\Parameter('password', 'F.ui.tbxPassword.getValue()')
            )
            ->validateForms('SimpleForm1')
            ->text('登录'),
        F::Button()
            ->id('btnReset')
            ->text('重置')
            ->onClientClick('F.ui.SimpleForm1.reset();')
        );
?>
<br/>
<?php
echo F::Label()
    ->id('labResult')
    ->showLabel(false);
?>

<?php \FineUI\ResourceManager\ResourceManager::render(); ?>
<?php require_once '../../include/footer.php'; ?>
