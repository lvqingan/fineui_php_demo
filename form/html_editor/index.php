<?php
$sourceFiles = ['./form/html_editor/actions.php'];
require_once '../../lib/FineUI/autoload.php';
\FineUI\ScriptManger::run();
require_once '../../include/header.php';

use \FineUI\FineUIControls as F;
?>

<?php
echo F::SimpleForm()
    ->id("SimpleForm1")
    ->bodyPadding(5)
    ->labelAlign(\FineUI\Enums\LabelAlign::TOP)
    ->enableCollapse(true)
    ->title('表单')
    ->width(850)
    ->items(
        F::HtmlEditor()
            ->label('文本编辑器')
            ->id('HtmlEditor1')
            ->editor(\FineUI\Enums\Editor::UMEDITOR)
            ->basePath('/third-party/res/umeditor/')
            ->height(250)
            ->text('FineUI（专业版）<br>基于 jQuery 的专业 ASP.NET 控件库。<br><br>FineUI的使命<br>创建 No JavaScript，No CSS，No UpdatePanel，No ViewState，No WebServices 的网站应用程序。<br><br>支持的浏览器<br>IE 8.0+、Chrome、Firefox、Opera、Safari<br><br>授权协议<br>商业授权<br><br>相关链接<br>论坛：<a href=\"http://fineui.com/bbs/\">http://fineui.com/bbs/</a><br>示例：<a href=\"http://fineui.com/demo_pro/\">http://fineui.com/demo_pro/</a><br><br>'),
        F::TextArea()
            ->id('TextArea1')
            ->label('多行文本框')
            ->height(150)
            ->text('FineUI的使命是创建 No JavaScript，No CSS，No UpdatePanel，No ViewState，No WebServices 的网站应用程序。'),
        F::Button()
            ->id('Button1')
            ->onClick('./actions.php?action=Button1_Click',
                new \FineUI\Parameter('content', 'F.htmlEncode(F.ui.HtmlEditor1.getValue())'))
            ->text('获取 HTML 编辑器的内容')
            ->cssClass('marginr'),
        F::Button()
            ->id('Button2')
            ->onClick('./actions.php?action=Button2_Click',
                new \FineUI\Parameter('content', 'F.ui.TextArea1.getValue()'))
            ->text('设置 HTML 编辑器的内容')
    )
?>
<br/>
    注：富文本编辑器可以在UMEditor、UEditor、CKEditor、TinyMCE中间选择，通过控件属性就能简单切换。

<?php require_once '../../include/footer.php'; ?>