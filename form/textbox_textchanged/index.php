<?php
$sourceFiles = ['./form/textbox_textchanged/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<?php
echo F::SimpleForm()
    ->id('SimpleForm1')
    ->bodyPadding(5)
    ->labelAlign(\FineUI\Enums\LabelAlign::TOP)
    ->enableCollapse(true)
    ->title('简单表单')
    ->width(500)
    ->showHeader(true)
    ->items(
        F::TextBox()
            ->id('TextBox1')
            ->label('文本框一（文本改变事件）')
            ->emptyText('输入字符会立即触发TextChanged事件')
            ->onTextChanged('./actions.php?action=TextBox1_TextChanged', array(
                'text' => new \FineUI\JsCode('F.ui.TextBox1.getValue()')
            )),
        F::TextBox()
            ->id('TextBox2')
            ->label('文本框二（失去焦点事件）')
            ->emptyText('输入字符后失去焦点，会触发Blur事件')
            ->onBlur('./actions.php?action=TextBox2_Blur', array(
                'text' => new \FineUI\JsCode('F.ui.TextBox2.getValue()')
            ))
    );
?>
<br/>
<?php
echo F::Label()
    ->id('labResult1');
?>
<br/>
<?php
echo F::Label()
    ->id('labResult2');
?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>
