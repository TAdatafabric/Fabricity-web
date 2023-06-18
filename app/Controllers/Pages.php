<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Fabricity'
        ];
        return view('pages/home', $data);
    }

    public function insight()
    {
        $data = [
            'title' => 'Insight | Fabricity'
        ];
        return view('pages/insight', $data);
    }
}
