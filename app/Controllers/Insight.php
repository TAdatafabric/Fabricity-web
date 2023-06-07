<?php

namespace App\Controllers;

class Insight extends BaseController
{
    public function create()
    {
        $data = [
            'title' => 'View Insight'
        ];
        return view('insight/create', $data);
    }
}
