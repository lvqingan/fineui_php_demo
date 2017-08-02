<?php
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\F;

?>

<div>
    <?php
echo F::Button()
        ->id('btnMenu')
        ->text('中国科学技术大学')
        ->menuID('Menu1')
    ?>
</div>

<br/>

<div>
    <?php
echo F::Button()
        ->id('Button1')
        ->text('中国科学技术大学（和上一个按钮共享同一个菜单）')
        ->menuID('Menu1')
    ?>
</div>

<br/>

<?php
F::Menu()
    ->id('Menu1')
    ->items(array(
        F::MenuHyperLink()
            ->icon(\FineUI\Enums\Icon::TAG_GREEN)
            ->target('_blank')
            ->navigateUrl('http://scms.ustc.edu.cn/')
            ->text('化学与材料科学学院'),
        F::MenuButton()
            ->icon(\FineUI\Enums\Icon::TAG_BLUE)
            ->text('管理学院')
            ->menu(F::Menu()
                ->items(array(
                    F::MenuHyperLink()
                        ->icon(\FineUI\Enums\Icon::TAG_PINK)
                        ->target('_blank')
                        ->navigateUrl('http://is.ustc.edu.cn/')
                        ->text('工商管理系'),
                    F::MenuHyperLink()
                        ->icon(\FineUI\Enums\Icon::TAG_PURPLE)
                        ->target('_blank')
                        ->navigateUrl('http://stat.ustc.edu.cn/')
                        ->text('统计与金融系')
                )))
    ));
?>

<?php \FineUI\PageContext::init() ?>

<?php require_once '../../include/footer.php'; ?>
