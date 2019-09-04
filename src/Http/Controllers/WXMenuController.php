<?php

namespace Yisonli\WXMenu\Http\Controllers;

use Encore\Admin\Layout\Content;
use Illuminate\Routing\Controller;

class WXMenuController extends Controller
{
    public function index(Content $content)
    {
        if(empty($value)) {
            $value = [
                "button" => [
                    [
                        "name" => "菜单1",
                        "sub_button" => [
                            [
                                "name" => "子菜单5",
                                "type" => "view",
                            ],
                            [
                                "name" => "子菜单4",
                                "type" => "view",
                            ],
                        ],
                    ],
                    [
                        "name" => "菜单名称",
                        "type" => "click",
                        "url" => "http://yyeer.com/",
                    ],
                    [
                        "name" => "菜单名称",
                        "type" => "view",
                        "url" => "http://yyeer.com/",
                    ],
                ],
            ];
        }
        return $content
            ->title('Title')
            ->description('Description')
            ->body(view('wxmenu::index', ['value'=>json_encode($value, JSON_UNESCAPED_UNICODE)]));
    }
}