<?php

namespace Yisonli\WXMenu;

use Encore\Admin\Extension;

class WXMenu extends Extension
{
    public $name = 'wxmenu';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'WeChatMenu',
        'path'  => 'wxmenu',
        'icon'  => 'fa-gears',
    ];
}