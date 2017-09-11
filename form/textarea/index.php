<?php
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\FineUIControls as F;
?>

<?php
echo F::SimpleForm()
    ->id('SimpleForm1')
    ->bodyPadding(5)
    ->enableCollapse(true)
    ->title('简单表单')
    ->labelAlign(\FineUI\Enums\LabelAlign::TOP)
    ->width(550)
    ->showHeader(true)
    ->items(
        F::TextArea()
            ->id('TextArea1')
            ->emptyText('文本框的高度会自动扩展')
            ->label('自动扩展高度的文本输入框')
            ->autoGrowHeight(true)
            ->autoGrowHeightMin(100)
            ->autoGrowHeightMax(200)
    );
?>
<br/>
<?php
echo F::Label()->id('labResult')
?>

<?php \FineUI\ResourceManager\ResourceManager::render(); ?>
<?php require_once '../../include/footer.php'; ?>

