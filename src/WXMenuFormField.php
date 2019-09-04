<?php

namespace Yisonli\WXMenu;

use Encore\Admin\Form\Field;

class WXMenuFormField extends Field
{
    protected $view = 'wxmenu::index';

    protected static $css = [
        'vendor/laravel-admin-ext/wxmenu/css/style.min.css'
    ];
    protected static $js = [
        'https://cdn.jsdelivr.net/npm/vue',
        'vendor/laravel-admin-ext/wxmenu/js/index.min.js'
    ];

    public function render()
    {
        if(empty($this->value)) {
            $this->value = [
                "button" => [],
            ];
        }
        if (is_array($this->value)) {
            $this->value = json_encode($this->value, JSON_UNESCAPED_UNICODE);
        }

        return parent::render();
    }
}