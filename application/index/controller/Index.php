<?php

namespace app\index\controller;

class Index
{
    public function index()
    {
        rename('D:\phpEnv\www\localhost\test1\vendor\fdd\php-helper\src\..\resources\html\page\color-select.html', 'D:\phpEnv\www\localhost\test1\vendor\fdd\php-helper\src\..\resources\html\page\color-select.html
  \colorselect.html');
    }

    public function hello($name = 'ThinkPHP5')
    {
        return 'hello,' . $name;
    }
}