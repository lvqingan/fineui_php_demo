<?php
$sourceFiles = ['./form/trigger_box/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<?php
echo F::SimpleForm()
    ->id("SimpleForm1")
    ->bodyPadding(5)
    ->width(450)
    ->enableCollapse(true)
    ->showBorder(true)
    ->title("表单")
    ->showheader(true)
    ->items(
        F::TriggerBox()
        ->id("TriggerBox1")
        ->showLabel(false)
        ->readonly(false)
        ->triggerIcon(\FineUI\Enums\TriggerIcon::SEARCH)
        ->emptyText("打开弹出窗口")
        ->OnClientTriggerClick("F.ui.Window1.show();")
    );

echo F::Window()
    ->id('Window1')
    ->title('弹出窗口')
    ->bodyPadding(10)
    ->isModal(true)
    ->hidden(true)
    ->target(\FineUI\Enums\Target::TOP)
    ->width(450)
    ->height(300)
    ->items(
        F::Button()
            ->id('btnCloseWindow')
            ->text('关闭当前窗口')
            ->onClick('./actions.php?action=btnCloseWindow_Click')
    );
?>
<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>
