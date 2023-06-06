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

    public function input()
    {
        $data = [
            'title' => 'Input Data | Fabricity'
        ];
        return view('pages/input', $data);
    }

    public function divisi1()
    {
        $data = [
            'title' => 'Divisi 1'
        ];
        return view('pages/divisi1', $data);
    }

    public function divisi2()
    {
        $data = [
            'title' => 'Divisi 2'
        ];
        return view('pages/divisi2', $data);
    }

    public function divisi3()
    {
        $data = [
            'title' => 'Divisi 3'
        ];
        return view('pages/divisi3', $data);
    }

    public function create()
    {
        $data = [
            'title' => 'View Insight'
        ];
        return view('pages/create', $data);
    }
}
