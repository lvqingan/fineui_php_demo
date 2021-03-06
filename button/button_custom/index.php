<?php
$sourceFiles = ['./button/button_custom/actions.php'];
require_once '../../lib/FineUI/autoload.php';
require_once '../../include/header.php';

use \FineUI\FineUIControls as F;
?>

<style>
    .bgbtn {
        background-image: url('/res/images/login.png') !important;
        width: 320px;
        height: 50px;
        border-width: 0 !important;
        background-color: transparent !important;
    }
</style>

<div>
    <?php
echo F::Button()
        ->id('Button1')
        ->text('普通按钮')
        ->size(\FineUI\Enums\ButtonSize::LARGE)
        ->onClick('./actions.php?action=Button1_Click')
    ?>
</div>

<br/>
<br/>

<div>
    <?php
echo F::Button()
        ->id('Button2')
        ->text('')
        ->cssClass('bgbtn')
        ->onClick('./actions.php?action=Button2_Click')
    ?>
</div>

<?php require_once '../../include/footer.php'; ?>
