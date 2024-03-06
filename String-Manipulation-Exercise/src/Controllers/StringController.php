<?php

namespace src\Controllers;

use src\Models\StringModel;
use src\Views\StringView;

class StringController
{
    public function index()
    {
        $data = StringModel::getMessage();
        $view = new StringView($data);
        $view->render();
    }
}
