<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="Title" content="基于 jQuery 的专业 WebUI 控件库" />
    <title>FineUI（PHP版）在线示例</title>
    <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />


    <link href="./f/f.css" rel="stylesheet" />
    <link href="./res/css/common.css" rel="stylesheet" />
    <link href="./res/css/index.css" rel="stylesheet" />
    <link href="./f/themes/<?php echo isset($_COOKIE['Theme_JS']) ? $_COOKIE['Theme_JS'] : 'default' ?>/theme.css" rel="stylesheet" />

</head>
<body class="defaultpage">

<div id="wrap1"></div>

<div id="header" class="ui-widget-header f-mainheader" style="display:none;">
    <table>
        <tr>
            <td>
                <div id="homepage_wrap" class="f-inline-block"></div>
                <a class="logo" href="./index.html" title="FineUI（PHP版）在线示例">FineUI（PHP版）在线示例</a>
            </td>
            <td style="text-align: right;">
                <div id="download_wrap" class="f-inline-block"></div>
                <div id="mobile_wrap" class="f-inline-block"></div>
                <div id="loadingselect_wrap" class="f-inline-block"></div>
                <div id="themeselect_wrap" class="f-inline-block"></div>
                <div id="userprofile_wrap" class="f-inline-block"></div>
            </td>
        </tr>
    </table>
</div>


<script src="./f/f.js"></script>
<script src="./f/lang/<?php echo isset($_COOKIE['Language_JS']) ? $_COOKIE['Language_JS'] : 'zh_CN' ?>.js"></script>
<script src="./res/js/common.js"></script>
<script src="./res/menu.js"></script>
<script>
    // 从 Cookie 中读取配置信息
    var cookieThemeName = F.cookie('Theme_JS') || 'default';
    var cookieThemeTitle = F.cookie('Theme_JS_Title');
    var cookieMenuMode = F.cookie('MenuMode_JS') || 'normal';
    var cookieLanguage = F.cookie('Language_JS');

    var mainPageUrl = './common/main.html';
    if (cookieThemeName === 'bootstrap_pure') {
        mainPageUrl = './common/main_bootstrap_pure.html';
    }

    // 展开左侧面板
    function expandLeftPanel() {
        var treeMenu = F.ui.treeMenu;

        treeMenu.miniMode = false;
        // 重新加载树菜单
        treeMenu.loadData();

        treeMenu.setWidth(220);
    }


    // 折叠左侧面板
    function collapseLeftPanel() {
        var treeMenu = F.ui.treeMenu;

        treeMenu.miniMode = true;
        treeMenu.miniModePopWidth = 300;
        // 重新加载树菜单
        treeMenu.loadData();

        treeMenu.setWidth(50);
    }

    // 公开方法 - 添加选项卡
    // id： 选项卡ID
    // iframeUrl: 选项卡IFrame地址
    // title： 选项卡标题
    // icon： 选项卡图标
    // iconFont： 选项卡图标字体
    // refreshWhenExist： 添加选项卡时，如果选项卡已经存在，是否刷新内部IFrame
    function addExampleTab(tabOptions) {
        var mainTabStrip = F.ui.mainTabStrip;
        F.addMainTab(mainTabStrip, tabOptions);
    }


    // 公开方法 - 移除激活标签页
    function removeActiveTab() {
        var mainTabStrip = F.ui.mainTabStrip;
        mainTabStrip.getActiveTab().hide();
    }


    F.ready(function () {

        // 顶部 - 官网首页
        F.ui({
            type: 'button', renderTo: '#homepage_wrap', cls: 'icononlyaction', defaultState: false, defaultCorner: false, tooltip: '官网首页', text: '', iconFont: 'home', iconAlign: 'top',
            handler: function (event) {
                window.open('http://fineui.com/js/', '_blank');
            }
        });

        // 顶部 - 下载试用
        F.ui({
            type: 'button', renderTo: '#download_wrap', cls: 'icontopaction download', defaultState: false, defaultCorner: false, text: '下载试用', iconFont: 'download', iconAlign: 'top',
            handler: function (event) {
                window.open('http://fineui.com/js/', '_blank');
            }
        });

        // 顶部 - 移动示例
        F.ui({
            type: 'button', renderTo: '#mobile_wrap', cls: 'icontopaction mobile', defaultState: false, defaultCorner: false, text: '移动示例', iconFont: 'mobile', iconAlign: 'top',
            handler: function (event) {
                window.location.href = './mobile/main.html';
            }
        });

        // 顶部 - 加载动画
        F.ui({
            type: 'button', renderTo: '#loadingselect_wrap', cls: 'icontopaction loading', defaultState: false, defaultCorner: false, text: '加载动画', iconFont: 'spinner', iconAlign: 'top',
            handler: function (event) {
                F.ui.loadingwindow.show();
            }
        });

        // 顶部 - 主题仓库
        F.ui({
            type: 'button', renderTo: '#themeselect_wrap', cls: 'icontopaction themes', defaultState: false, defaultCorner: false, text: '主题仓库', iconFont: 'bank', iconAlign: 'top',
            handler: function (event) {
                F.ui.themewindow.show();
            }
        });

        // 顶部 - 当前用户头像
        F.ui({
            type: 'button', renderTo: '#userprofile_wrap', cls: 'userpicaction', defaultState: false, defaultCorner: false, text: '三生石上', icon: './res/images/my_face_80.jpg',
            menu: {
                type: 'menu',
                listeners: {
                    render: function (event) {
                        // 初始化 - 显示模式
                        $.each(F.ui.menuMode.items, function (index, item) {
                            if (item.getAttr('tag') === cookieMenuMode) {
                                item.setChecked(true);
                                return false; // break
                            }
                        });
                        // 初始化 - 语言
                        $.each(F.ui.menuLang.items, function (index, item) {
                            if (item.getAttr('tag') === cookieLanguage) {
                                item.setChecked(true);
                                return false; // break
                            }
                        });
                    }
                },
                items: [{
                    type: 'menuitem', text: '显示模式',
                    menu: {
                        type: 'menu', id: 'menuMode',
                        items: [{
                            type: 'menucheckbox', text: '普通模式', checked: true, group: 'MenuMode', attrs: { tag: 'normal' }
                        }, {
                            type: 'menucheckbox', text: '紧凑模式', checked: false, group: 'MenuMode', attrs: { tag: 'compact' }
                        }, {
                            type: 'menucheckbox', text: '大字体模式', checked: false, group: 'MenuMode', attrs: { tag: 'large' }
                        }, {
                            type: 'menucheckbox', text: '大间距模式', checked: false, group: 'MenuMode', attrs: { tag: 'largeSpace' }
                        }],
                        listeners: {
                            checkchange: function (event, item, checked) {
                                F.cookie('MenuMode_JS', item.getAttr('tag'), {
                                    expires: 100 // 单位：天
                                });
                                top.window.location.reload();
                            }
                        }
                    }
                }, {
                    type: 'menuitem', text: '语言',
                    menu: {
                        type: 'menu', id: 'menuLang',
                        items: [{
                            type: 'menucheckbox', text: '简体中文', checked: true, group: 'MenuLang', attrs: { tag: 'zh_CN' }
                        }, {
                            type: 'menucheckbox', text: '繁體中文', checked: false, group: 'MenuLang', attrs: { tag: 'zh_TW' }
                        }, {
                            type: 'menucheckbox', text: 'English', checked: false, group: 'MenuLang', attrs: { tag: 'en' }
                        }, {
                            type: 'menucheckbox', text: 'ئۇيغۇر تىلى', checked: false, group: 'MenuLang', attrs: { tag: 'zh_UEY' }
                        }],
                        listeners: {
                            checkchange: function (event, item, checked) {
                                F.cookie('Language_JS', item.getAttr('tag'), {
                                    expires: 100 // 单位：天
                                });
                                top.window.location.reload();
                            }
                        }
                    }
                }, '-', {
                    type: 'menuitem', text: '专业版示例（WebForms）', href: 'http://fineui.com/demo_pro/', hrefTarget: '_blank'
                }, {
                    type: 'menuitem', text: '企业版示例（MVC）', href: 'http://fineui.com/demo_mvc/', hrefTarget: '_blank'
                }, '-', {
                    type: 'menuitem', cls: 'copyright-menutext', text: "<div class=\"copyright\">" +
                    "<div class=\"version\"><a target=\"_blank\" href=\"http://fineui.com/js/\"><img src=\"./res/images/logo/logo_small.png\" alt=\"logo\"/></a>" +
                    "<br/><span>FineUI v" + F.fineui + "</span></div>" +
                    "<div class=\"actions\"><a target=\"_blank\" href=\"http://wpa.qq.com/msgrd?v=3&uin=2877408506&site=qq&menu=yes\">在线咨询</a>" +
                    "&nbsp;&nbsp;&nbsp;&nbsp;<a target=\"_blank\" href=\"http://fineui.com/version_js/\">更新记录</a></div>" +
                    "</div>"
                }]
            }
        });


        // 中间 - 选项卡右侧工具图标列表
        var mainTabStripTools = [{
            type: 'tool', cls: 'tabtool viewcode', tooltip: '查看源代码', iconFont: 'code', marginRight: 5,
            handler: function (event) {
                var mainTabStrip = F.ui.mainTabStrip;
                var windowSourceCode = F.ui.sourcecodewindow;


                var activeTab = mainTabStrip.getActiveTab();
                var iframeWnd, iframeUrl;
                if (activeTab.iframe) {

                    iframeWnd = activeTab.getIFrameWindow();
                    iframeUrl = activeTab.getIFrameUrl();

                } else {
                    iframeWnd = window;
                    iframeUrl = './index.html';
                }

                var files = [iframeUrl];
                var sourcefilesNode = $(iframeWnd.document).find('head meta[name=sourcefiles]');
                if (sourcefilesNode.length) {
                    $.merge(files, sourcefilesNode.attr('content').split(';'));
                }
                windowSourceCode.show('./common/source.html?files=' + encodeURIComponent(files.join(';')));
            }
        }, {
            type: 'tool', id: 'toolrefresh', cls: 'tabtool', tooltip: '刷新', iconFont: 'refresh', marginRight: 5,
            handler: function (event) {
                var mainTabStrip = F.ui.mainTabStrip;

                var activeTab = mainTabStrip.getActiveTab();
                if (activeTab.iframe) {
                    var iframeWnd = activeTab.getIFrameWindow();
                    iframeWnd.location.reload();
                }
            }
        }, {
            type: 'tool', id: 'toolnewtab', cls: 'tabtool', tooltip: '在新标签页中打开', iconFont: 'share', marginRight: 5,
            handler: function (event) {
                var mainTabStrip = F.ui.mainTabStrip;

                var activeTab = mainTabStrip.getActiveTab();
                if (activeTab.iframe) {
                    var iframeUrl = activeTab.getIFrameUrl();
                    iframeUrl = iframeUrl.replace(/\/mobile\/\?file=/ig, '/mobile/');
                    window.open(iframeUrl, '_blank');
                }
            }
        }, {
            type: 'tool', cls: 'tabtool', tooltip: '最大化', iconFont: 'expand',
            handler: function (event) {
                var topPanel = F.ui.topPanel;

                var currentTool = this;
                if (currentTool.iconFont.indexOf('expand') >= 0) {
                    topPanel.collapse();

                    collapseLeftPanel();

                    currentTool.setIconFont('compress');
                } else {
                    topPanel.expand();

                    expandLeftPanel();

                    currentTool.setIconFont('expand');
                }
            }
        }];


        // 创建页面主体框架
        F.ui({
            type: 'viewport', renderTo: '#wrap1', layout: 'region', cls: 'mainpanel',
            items: [{
                type: 'panel', id: 'topPanel', contentEl: '#header', header: false, border: false, region: 'top', cls: 'topregion bgpanel',
            }, {
                type: 'tree', id: 'treeMenu', cls: 'leftregion bgpanel', collapsible: true, width: 220, title: '示例菜单', header: false, region: 'left', split: true, splitWidth: 2, splitIcon: false,
                hideHScrollbar: true, hideVScrollbar: true, expanderToRight: true, headerStyle: true, singleClickExpand: true,
                rootNode: {
                    expanded: true, children: MENUS
                }
            }, {
                type: 'tabstrip', id: 'mainTabStrip', cls: 'centerregion', flex: 1, activeTabIndex: 0, enableCloseMenu: true, region: 'center',
                items: [{
                    type: 'tab', iframe: true, iframeUrl: mainPageUrl, title: '首页', iconFont: 'home'
                }],
                tools: mainTabStripTools
            }]
        });


        // 窗口 - 查看源代码
        F.ui({
            type: 'window', id: 'sourcecodewindow', width: 980, height: 600, resizable: true, maximizable: true, title: '源代码', iconFont: 'code', iframe: true, hidden: true
        });

        // 窗口 - 主题选择
        F.ui({
            type: 'window', id: 'themewindow', width: 1000, height: 600, resizable: true, maximizable: true, minHeight: 100, minWidth: 200, title: '主题仓库', hidden: true, iframe: true, iframeUrl: './common/themes.html'
        });

        // 窗口 - 加载动画
        F.ui({
            type: 'window', id: 'loadingwindow', width: 1000, height: 600, resizable: true, maximizable: true, minHeight: 100, minWidth: 200, title: '加载动画', hidden: true, iframe: true, iframeUrl: './common/loading.html'
        });




        var treeMenu = F.ui.treeMenu, mainTabStrip = F.ui.mainTabStrip;

        // 初始化主框架中的树(或者Accordion+Tree)和选项卡互动，以及地址栏的更新
        // treeMenu： 主框架中的树控件实例，或者内嵌树控件的手风琴控件实例
        // mainTabStrip： 选项卡实例
        // updateHash: 切换Tab时，是否更新地址栏Hash值（默认值：true）
        // refreshWhenExist： 添加选项卡时，如果选项卡已经存在，是否刷新内部IFrame（默认值：false）
        // refreshWhenTabChange: 切换选项卡时，是否刷新内部IFrame（默认值：false）
        // maxTabCount: 最大允许打开的选项卡数量
        // maxTabMessage: 超过最大允许打开选项卡数量时的提示信息
        F.initTreeTabStrip(treeMenu, mainTabStrip, {
            maxTabCount: 10,
            maxTabMessage: '请先关闭一些选项卡（最多允许打开 10 个）！'
        });


        // 初始化 - 从 Cookie 中读取主题名称
        if (cookieThemeTitle) {
            F.removeCookie('Theme_JS_Title');
            F.notify({
                message: '主题更改为：' + cookieThemeTitle,
                header: false,
                displayMilliseconds: 3000,
                positionX: 'center',
                positionY: 'center'
            });
        }

    });


</script>

</body>
</html>
