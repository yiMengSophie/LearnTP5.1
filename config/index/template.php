<?php
define('DS',DIRECTORY_SEPARATOR);
return [
    // 模板引擎类型 支持 php think 支持扩展
    'type'         => 'Think',
    // 默认模板渲染规则 1 解析为小写+下划线 2 全部转换小写 3 保持操作方法
    'auto_rule'    => 1,
    //视图分离， 模板路径  为每个模块单独建立皮肤   
    'view_path'    => Env::get('ROOT_PATH') .'public' . DS . '__MODULAR_NAME__' . DS . '__THEME_NAME__' . DS  ,
    // 视图分离，定义全局的视图根目录，然后模块作为子目录
    // 'view_base' => Env::get('ROOT_PATH') . 'public' . DS . '__MODULAR_NAME__' . DS . '__THEME_NAME__' . DS,
   
    // 模板后缀
    'view_suffix'  => 'html',
    // 模板文件名分隔符
    'view_depr'    => DS,
    // 模板引擎普通标签开始标记
    'tpl_begin'    => '{',
    // 模板引擎普通标签结束标记
    'tpl_end'      => '}',
    // 标签库标签开始标记
    'taglib_begin' => '{',
    // 标签库标签结束标记
    'taglib_end'   => '}',
    
    'tpl_replace_string' => [
        '__PUBLIC__' => '/template/static',
    ]
];
