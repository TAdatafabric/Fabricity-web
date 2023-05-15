<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | Fabricity'
        ];
        echo view('layout/header', $data);
        echo view('pages/home');
        echo view('layout/footer');
    }

    public function about()
    {
        $data = [
            'title' => 'About Me | Fabricity'
        ];
        echo view('layout/header', $data);
        echo view('pages/about');
        echo view('layout/footer');
    }

    public function insight()
    {
        $data = [
            'title' => 'Insight | Fabricity'
        ];
        echo view('layout/header', $data);
        echo view('pages/insight');
        echo view('layout/footer');
    }

    public function services()
    {
        $data = [
            'title' => 'Services | Fabricity'
        ];
        echo view('layout/header', $data);
        echo view('pages/services');
        echo view('layout/footer');
    }

    public function page()
    {
        $data = [
            'title' => 'Pages | Fabricity'
        ];
        echo view('layout/header', $data);
        echo view('pages/page');
        echo view('layout/footer');
    }

    public function contact()
    {
        $data = [
            'title' => 'Contact | Fabricity'
        ];
        echo view('layout/header', $data);
        echo view('pages/contact');
        echo view('layout/footer');
    }
}
