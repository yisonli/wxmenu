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
            $this->value = !empty($this->default) ? $this->default : [
                "button" => [],
            ];
        }
        if (!is_string($this->value)) {
            $this->value = json_encode($this->value);
        }else {
            $this->value = json_encode(json_decode($this->value));   //兼容json里有类似</p>格式，首次初始化显示会丢失的问题
        }

        return parent::render();
    }
}